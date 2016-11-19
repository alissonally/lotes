<?php

class cidadeController extends AppController{

    protected $helper = 'localize';

    public function __construct() {
        parent::__construct();
        $this->loadModel('Cidade');
    }

    public function index() {
        //$this->view->display('extends:layout/app.html|index/index.html');
    }//index

    public function cidades($estado_id){
        $cidades = $this->model['cidade']->get_all_by_uf($estado_id);
        $data=[];
        foreach ($cidades as $app) {
            $data[] = $app->to_array();
        }
        echo json_encode($data);
    }
}