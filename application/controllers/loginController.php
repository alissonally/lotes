<?php

class loginController extends Controller{


    public function __construct() {
        parent::__construct();
        $this->loadModel('Usuario');
    }

    public function index() {
        
        if(Session::get('logged')){
            header('Location:'. base_url());
        } else {
            $this->view->assign('erro', Session::get('erro'));
            $this->view->display('extends:layout/login.html|login/login.html');
            Session::destroy('erro');
        }
    }//index

    public function exec(){

        if(isset($_POST['email']) && empty($_POST['email'])){
            Session::set('logged', false);
            Session::set('erro', 'Email não pode ser vazio');
            header('Location:'. base_url('login'));
            exit;
        }

        if(isset($_POST['senha']) && empty($_POST['senha'])){
            Session::set('logged', false);
            Session::set('erro', 'Senha não pode ser vazio');
            header('Location:'. base_url('login'));
            exit;
        }

        $usuario = Usuario::find(
            array(
                'conditions'=>array('email = ? AND senha = ?', $_POST['email'], Hash::create('sha1', $_POST['senha'], HASH_PASSWORD_KEY)
                ))
            );
        if(!is_null($usuario)){
            Session::set('logged', true);
            Session::set('logou', true);
            Session::set('usuario', $usuario->to_array());
            Session::set('nivel', $usuario->nivel);

            // if($usuario->nivel === 0)
            //     header('Location:'. base_url());
            // else if ($usuario->nivel === 1)
            //     header('Location:'. base_url('secretaria'));
            // else if ($usuario->nivel === 2)
            //     header('Location:'. base_url('corretor'));
            header('Location:'. base_url());

        } else {
            Session::set('logged', false);
            Session::set('erro', 'Usuario ou senha invalido');
            header('Location:'. base_url('login'));
        }
    }

    public function logout(){
        session_destroy();
        header('Location:'. base_url('login'));
    }
}