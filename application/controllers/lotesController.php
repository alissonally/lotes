<?php

class lotesController extends Controller{

    protected $helper = 'localize';

    public function __construct() {
        parent::__construct();
        $this->loadModel('Terreno');
    }

    public function index() {
        $this->view->assign('lotes', true );
        $this->view->display('extends:layout/app.html|lotes/lotes.html');
    }//index

    public function all(){
        header('Content-Type: application/json');

        $lotes = Terreno::all();

        $json = [];
        foreach ($lotes as $cliente) {
            $json[] = $cliente->to_array();
        }
        echo json_encode($json , JSON_PRETTY_PRINT);
    }
}