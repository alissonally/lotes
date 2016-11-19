<?php

class indexController extends AppController{

    protected $helper = 'localize';

    public function __construct() {
        parent::__construct();
        $this->loadModel('Estado');
        $this->loadModel('Corretor');
        $this->loadModel('Usuario');
    }

    public function index() {
        $estado = $this->model['estado']->get_estados();
        $this->view->assign('estados', $estado);
        if($this->usuario->nivel == Estatico::CORRETOR){
            $this->view->display('extends:layout/app.html|corretor/index.html');
        } else if($this->usuario->nivel == Estatico::GERENCIA){
            $this->view->display('extends:layout/app.html|gerencia/index.html');
        } else {
            $this->view->display('extends:layout/app.html|index/index.html');
        }
    }//index
}