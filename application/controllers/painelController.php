<?php
class painelController extends Controller{

    public function __construct(){
        parent::__construct();
        $this->loadModel('Cliente');
    }

    public function index(){
        $this->view->display('painel/painel.html');
    }


    public function comparece($limit=1){
        header('Content-Type: application/json');
        if($limit > 1){
            $offset = 1;
        } else {
            $offset=0;
        }
        $cliente = Cliente::find('all', array('conditions' => "comparecimento = 1", 'order'=>'com_data desc', 'limit'=>$limit, 'offset' => $offset));

        //var_dump($clientes);
        $json = [];
        foreach ($cliente as $cli) {
            //var_dump($cli);
            $json[$cli->id]['cliente']= $cli->to_array();
            $json[$cli->id]['data_com']= $cli->com_data;
            $json[$cli->id]['cliente']['data_com']= $cli->com_data;
            $json[$cli->id]['cliente']['corretor'] = $cli->corretor->to_array();
        }
        echo json_encode($json , JSON_PRETTY_PRINT);

    }
}