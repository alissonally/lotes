<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AppController
 *
 * @author alissonaraujo
 */
abstract class AppController extends Controller{

    protected $helper = 'localize'; // disponibiliza a class Menu para a class AppController
    

    public function __construct() {
        parent::__construct();
        //$localize = new Localize();        
        $this->loadModel('Usuario');  
        $this->isLogado();
        //Session::session_expire();
        //Session::token_expire();
    }
    /*
     * Verficação genérica de login
     * Método singleUser(tabela, key, condicao)
     * Rretorna dados do usuário logado
     */
    
    public function isLogado(){
       
        if(Session::isAuth() && !is_null(Session::isAuth())){ 
            $user = Session::get('usuario') !=null ? (object) Session::get('usuario') :'';
            $this->usuario =  Usuario::find($user->id);
            $this->view->assign("is_logged", Session::get('logged'));                     
            $this->view->assign("usuario", Usuario::find($user->id));                     
            $this->view->assign('data_user_logged', Session::get('data_user'));            
        } else {
            redirect(base_url('login'));
            exit;
        }
    }
   /*
    * Verifica o nivel passado e dar permissão ou lança exceção
    */
    public function autentication($nivel){       
       if(Session::getNivel() == $nivel){
            return true; 
        } else {
             throw new Exception('Sem permissão para acessar esse módulo');
        }
    }
}

