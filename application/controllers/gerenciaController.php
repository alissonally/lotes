<?php

class gerenciaController extends AppController{


    public function __construct() {
        parent::__construct();
        $this->loadModel('Cliente');
        $this->loadModel('Corretor');
        $this->loadModel('Terreno');

        if($this->usuario->nivel ==Estatico::CORRETOR){
            redirect(base_url());
        }
    }

    public function index() {
        if($this->usuario->nivel !=Estatico::GERENCIA && $this->usuario->nivel !=Estatico::ADMIN){
            redirect(base_url());
        }
        $this->view->display('extends:layout/app.html|gerencia/index.html');
    }//index



    public function count(){
        $contagem = new stdClass;
        $contagem->vendido = 0;
        $contagem->n_vendido = 0;
        $contagem->cadastro = 0;
        $contagem->compareceu = 0;

        $contagem->vendido = Terreno::count(array('conditions' => array("status = 1 ")));
        $contagem->total_lote = Terreno::count();
        $contagem->cadastro = Cliente::count(array('conditions' => array("status = 0 ")));
        $contagem->compareceu = Cliente::count(array('conditions' => array("comparecimento = 1 ")));

        header('Content-type: text/json');
        echo json_encode($contagem, JSON_PRETTY_PRINT);
    }


    public function corretor_count(){
        if($this->usuario->nivel !=1 && $this->usuario->nivel !=0){
            redirect(base_url());
        }
        $res = Corretor::find_by_sql('SELECT id, nome, creci, imobiliaria, (
            SELECT COUNT(id)
            FROM cliente AS c
            WHERE c.comparecimento = 1 AND c.corretor_id = co.id
            ) AS compareceram, (
            SELECT COUNT(id)
            FROM cliente AS c_n
            WHERE c_n.comparecimento = 0 AND c_n.corretor_id = co.id
            ) AS noa_compareceu,
            (
            SELECT COUNT(id)
            FROM terreno AS t
            WHERE t.`status` = 1 AND t.corretor_id = co.id) AS vendido
            FROM corretor AS co order by vendido desc'
        );
        $json = [];
        foreach ($res as $counts) {
           $json[] = $counts->to_array();
        }
        header('Content-type: text/json');
        echo json_encode($json, JSON_PRETTY_PRINT);
    }
}