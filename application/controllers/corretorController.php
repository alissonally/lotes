<?php

class corretorController extends AppController{

    protected $helper = 'localize';

    public function __construct() {
        parent::__construct();
        $this->loadModel('Corretor');

    }

    public function index() {

        $this->view->display('extends:layout/app.html|corretor/index.html');

    }//index

    public function access(){
        if($this->usuario->nivel !=Estatico::GERENCIA && $this->usuario->nivel !=Estatico::ADMIN){
            redirect(base_url());
        }
    }

    public function create(){

        if(isset($_POST['id'])){
            if(isset($_POST['id']) && !empty($_POST['id']) ){
                $corretor = Corretor::find($_POST['id']);

                $_POST['creci'] = !empty($_POST['creci']) ? $_POST['creci'] : $corretor->creci;
                $up = Corretor::table()->update($_POST, array('id' => array($corretor->id)));

                if($up){
                    Session::set('success', 'Corretor salvo com sucesso!');
                    header('Location:'.base_url('corretor/edit/'.$corretor->id));
                } else {
                    Session::set('erro', array('Erro ao salvar corretor'));
                    header('Location:'.base_url('corretor/edit/'.$corretor->id));
                }
            } else {
                $corretor = new Corretor($_POST);
                if (!$corretor->is_valid()){
                    Session::set('erro', $corretor->errors->full_messages());
                    Session::set('post', $_POST);
                    header('Location:'. $_SERVER['HTTP_REFERER']);
                    exit;
                } else {
                    $corretor->save();
                    Session::set('success', 'Corretor cadastrado');
                    header('Location:'. base_url('corretor/lista'));
                }
            }
        } else {
            throw new Exception("Erro ao processar formulário", 1);
        }
    }

    public function novo(){
        $this->access();
        $this->view->assign('erros',Session::get('erro'));
        $this->view->assign('corretor',Session::get('post'));
        $this->view->display('extends:layout/app.html|corretor/form.html');
        Session::destroy('erro');
        Session::destroy('post');
    }
    public function lista(){
        $this->pg(1);
    }

    public function pg($pagina=null){
        $this->access();
        $pagination_post = new Pagination('corretor',$pagina, 20, $this->model['corretor']->count_corretores());
        $this->view->assign('success', Session::get('success'));
        $this->view->assign('corretores', $this->model['corretor']->get_corretores(20, $pagina));
        $this->view->assign('paginacao',$pagination_post->paginacao());
        $this->view->display('extends:layout/app.html|corretor/edit.html');
        Session::destroy('success');
    }


    public function edit($id=null){
        if(!is_null($id)){
            $corretor = Corretor::find($id);

            $this->view->assign('success',Session::get('success'));
            $this->view->assign('erros',Session::get('erro'));
            $this->view->assign('post',Session::get('erro'));
            $this->view->assign('corretor',$corretor);
            $this->view->display('extends:layout/app.html|corretor/form.html');
            Session::destroy('post');
            Session::destroy('erro');
        }
    }

    public function all(){
        header('Content-Type: application/json');
        $res = Corretor::all();

        $json = [];
        foreach ($res as $cliente) {
            $json[] = $cliente->to_array();
        }
        echo json_encode($json , JSON_PRETTY_PRINT);
    }


    public function count($id){
        try {
            $corretor = Corretor::find($id);
            $contagem = new stdClass;
            $contagem->vendido = 0;
            $contagem->n_vendido = 0;
            $contagem->cadastro = 0;
            $contagem->compareceu = 0;

            $contagem->vendido = Terreno::count(array('conditions' => array("status = 1 AND corretor_id = {$id}")));
            $contagem->n_vendido = Terreno::count(array('conditions' => array("status = 0 ")));
            $contagem->total_lote = Terreno::count();
            $contagem->cadastro = Cliente::count(array('conditions' => array("status = 0 AND corretor_id = {$id} ")));
            $contagem->compareceu = Cliente::count(array('conditions' => array("comparecimento = 1 AND corretor_id = {$id}")));
            $contagem->corretor = $corretor->to_array();
        } catch (Exception $e) {

        }

        header('Content-type: text/json');
        echo json_encode($contagem, JSON_PRETTY_PRINT);
    }


    public function corretor_count($id){
        $res = Cliente::find_by_sql("SELECT id, nome, comparecimento,
                    (
                    SELECT COUNT(id)
                    FROM terreno AS t
                    WHERE t.cliente_id = c.id) AS lotes
                    FROM cliente AS c
                    WHERE c.corretor_id = $id"
            );

        $json = array();
        foreach ($res as $counts) {
           $json[] = $counts->to_array();
        }
        header('Content-type: text/json');
        echo json_encode($json, JSON_PRETTY_PRINT);
    }
}