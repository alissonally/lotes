<?php

class Session {

    public static function init() {        
        @session_start();       
    }

    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public static function get($key) {
        if (isset($_SESSION[$key]))
            return $_SESSION[$key];
    }

    public static function destroy($key = false) {
        if ($key) {
            if (isset($_SESSION[$key]))
                unset($_SESSION[$key]);
        } else {
            session_destroy();
        }
    }

    public static function getNivel() {
        $nivel = self::get('nivel');

        $regra[0] = "Empresa";
        $regra[1] = 'Diretor';
        if (!array_key_exists($nivel, $regra))
            throw new Exception('Acesso negado');
        else
            return $regra[$nivel];
    }

    public static function isAuth() {
        return self::get('logged');
    }

    public static function session_expire(){

        $last_click = self::get('last_click');

        if(isset($last_click) && !empty($last_click) ){
            $time_current = time();
            
            if( ($time_current - $last_click) > 1800) {
                self::destroy('logged');
                self::set('redirect_to', $_GET['url']);
                header('Location:'. base_url('login/login?expire=1'));
                exit();
            } else {
                self::set('last_click', time() + (5*60));
            }
        }
    }

    public static function token_expire(){
        $token_expire = self::get('usuario');
        if(isset($token_expire->code) &&  $token_expire->code === 500){
            self::destroy('logged');
            self::set('redirect_to', $_GET['url']);
            header('Location:'. base_url('login/login?token_expire=1'));
            exit();
        }
    }
}
