<?php

class exceptionController extends Controller{
	public function __construct() {
        parent::__construct();
        $this->loadModel('Corretor');

    }

    public function exception($message){

        // if (strlen($_GET['url']) >= 3 ){
        //     $cc = Corretor::find('all',
        //         array('conditions'=>array("creci LIKE '%".$_GET['url']."' "))
        //         );
        
        //     var_dump($cc, strlen($_GET['url']));
        //     if($cc !=NULL){
        //         die();
        //     }
        // }
        
    	$this->view->assign('msgnofound', $message);
    	if(Session::isAuth()){
    		$this->view->display('404/404.html');
        } else {
        	echo $message;
        }
    }
}
