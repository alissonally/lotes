<?php

class clienteController extends AppController{

    protected $helper = 'localize';

    public function __construct() {
        parent::__construct();
        $this->loadModel('Estado');
        $this->loadModel('Corretor');
        $this->loadModel('Endereco');
        $this->loadModel('Pagamento');
        $this->loadModel('Cliente');
        $this->loadModel('Terreno');
        if($this->usuario->nivel ==Estatico::CORRETOR){
            redirect(base_url());
        }
    }

    public function index(){
        $this->pg(1);
    }

    public function id($id){
        //$cliente = new Cliente();
        try {
           $res = Cliente::find(array('conditions'=>'status = 0 AND id = '.$id) );
        }
        catch (ActiveRecord\RecordNotFound $e) {

        }

        $this->view->assign('cliente',$res);
        $this->view->assign('success',Session::get('success'));
        $this->view->display('extends:layout/app.html|cliente/single.html');
        Session::destroy('success');
    }

    public function novo() {
        $estado = $this->model['estado']->get_estados();
        $this->view->assign('estados', $estado);
        $this->view->assign('erros',Session::get('erro'));
        $this->view->assign('post',Session::get('erro'));
        $this->view->assign('corretores', $this->model['corretor']->get_all());
        $this->view->display('extends:layout/app.html|cliente/novo.html');
        Session::destroy('post');
        Session::destroy('erro');
        //$this->view->display('extends:layout/app.html|index/index.html');
    }//index

    public function create(){
        if(isset($_POST)){

            $data_clientes= array();
            foreach ($_POST['cliente'] as $key => $value) {
                $data_clientes[$key] = $value;
            }

            // if(isset($data_clientes['cpf_cnpj']) && !empty($data_clientes['cpf_cnpj']) ) {
            //     $count =$this->model['cliente']->valide_cpf($data_clientes['cpf_cnpj']);
            //     if( $count > 0){
            //         Session::set('erro', array('Clinte já foi cadastrado'));
            //         Session::set('post', $_POST);
            //         header('Location:'. $_SERVER['HTTP_REFERER']);
            //         exit;
            //     }
            // }
            // $terreno= array();
            // foreach ($_POST['terreno'] as $key => $value) {
            //     $terreno[$key] = $value;
            // }



            // $pagamento_data= array();
            // foreach ($_POST['pagamento'] as $key => $value) {
            //     $pagamento_data[$key] = $value;
            // }

            if(isset($_POST['corretor']) && !empty($_POST['corretor'])) {
                $corretor_id = $_POST['corretor'];
            } else {
                Session::set('erro', array('Escolha o corretor'));
                Session::set('post', $_POST);
                header('Location:'. $_SERVER['HTTP_REFERER']);
                exit;
            }

            //Cliente
            $data_clientes['nascimento'] =UtilLib::stringToDate($data_clientes['nascimento']);
            $data_clientes['corretor_id'] = $corretor_id;
            $data_clientes['cpf_cnpj'] = isset($data_clientes['cpf_cnpj']) && !empty($data_clientes['cpf_cnpj']) ? $data_clientes['cpf_cnpj'] : '';
            $cliente = new Cliente($data_clientes);
            if (!$cliente->is_valid()){
                Session::set('erro', $cliente->errors->full_messages());
                Session::set('post', $_POST);
                header('Location:'. $_SERVER['HTTP_REFERER']);
                exit;
            } else {
                $cliente->save();

                // $terreno['corretor_id'] = $corretor_id;
                // $terreno['cliente_id'] = $cliente->id;
                // $terreno_save = new Terreno($terreno);
                // if (!$terreno_save->is_valid()){
                //     Session::set('erro', $terreno_save->errors->full_messages());
                //     Session::set('post', $_POST);
                //     header('Location:'. $_SERVER['HTTP_REFERER']);
                // } else {
                //     $terreno_save->save();
                // }

                if(isset($_POST['endereco']) && !empty($_POST['endereco']['cidade']) ) {
                    $enrdeco_data= array();
                    foreach ($_POST['endereco'] as $key => $value) {
                        $enrdeco_data[$key] = $value;
                    }
                    $enrdeco_data['cliente_id'] = $cliente->id;
                    $endereco = new Endereco($enrdeco_data);
                    if (!$endereco->is_valid()){
                        $cli = $cliente::find($cliente->id);
                        $cli->delete();
                        Session::set('erro', $endereco->errors->full_messages());
                        Session::set('post', $_POST);
                        header('Location:'. $_SERVER['HTTP_REFERER']);
                        exit;
                    } else {
                        $endereco->save();
                    }
                }

                // $pagamento_data['cliente_id'] = $cliente->id;
                // $pagamento_data['vencimento_1'] = UtilLib::stringToDate($pagamento_data['vencimento_1']);
                // $pagamento_data['vencimento_2'] = UtilLib::stringToDate($pagamento_data['vencimento_2']);
                // $pagamento_data['fin_vencimento'] = UtilLib::stringToDate($pagamento_data['fin_vencimento']);
                // $pagamento = new Pagamento($pagamento_data);
                // if (!$pagamento->is_valid()){
                //     Session::set('erro', $pagamento->errors->full_messages());
                //     Session::set('post', $_POST);
                //     header('Location:'. $_SERVER['HTTP_REFERER']);
                // } else {
                //     $pagamento->save();
                //}

                Session::set('success', 'Proposta inserida com sucessa');
                header('Location:'. base_url() .'cliente/id/'.$cliente->id);
            }
        }



    }//End create

    public function update(){
        if(isset($_POST)){

            $enrdeco_data= array();
            $data_clientes= array();
            foreach ($_POST['cliente'] as $key => $value) {
                $data_clientes[$key] = $value;
            }

            $corretor_id = $_POST['corretor'];

            //Cliente
            $data_clientes['nascimento'] = UtilLib::stringToDate($data_clientes['nascimento']);
            $data_clientes['corretor_id'] = $corretor_id;
            $cliente = Cliente::find($_POST['cliente_id']);

            //var_dump($cliente);
            //die();
            $cliente->update_attributes($data_clientes);
            if(isset($_POST['endereco']) ) {

                foreach ($_POST['endereco'] as $key => $value) {
                    $enrdeco_data[$key] = $value;
                }
                $enrdeco_data['cliente_id'] = $cliente->id;


                if(!empty($_POST['endereco_id'])){
                    $endereco = Endereco::find($_POST['endereco_id']);
                    $endereco->update_attributes($enrdeco_data);
                } else {
                    if(empty($enrdeco_data['cidade'])){
                        $enrdeco_data['cidade'] = '3582';
                        $enrdeco_data['uf'] = '17';
                    }
                    $endereco = new Endereco($enrdeco_data);
                    $endereco->save();
                }
            }
            Session::set('success', 'Cliente Atualizado');
            header('Location:'. base_url() .'cliente/id/'.$cliente->id);

        }
    }

    public function delete($id=null){

        if(!is_null($id)){
            try {
                $cliente = Cliente::find($id);
                $cliente->update_attributes(array('status'=>1, 'comparecimento'=>0));
                Session::set('success_exclude', 'Cliente Excluído');
                header('Location:'. base_url() .'cliente');

            } catch (Exception $e) {

            }

        }
    }
    public function lista(){
        $this->pg(1);
    }

    public function pg($pagina=null){

        $corretor = isset($_GET['corretor']) ? $_GET['corretor'] : null;
        $comparecimento = isset($_GET['comparecimento']) ? $_GET['comparecimento'] : null;
        $count = $this->model['cliente']->count_clientes($corretor, $comparecimento);
        $pagination_post = new Pagination('cliente',$pagina, 20, $count);
        $this->view->assign('clientes', $this->model['cliente']->get_clientes(20, $pagina, $corretor, $comparecimento));
        //var_dump(Cliente::connection()->last_query); die();
        $this->view->assign('paginacao',$pagination_post->paginacao());
        if(!is_null($corretor)){
            $this->view->assign('corretor', Corretor::find($corretor));
        }
        $this->view->assign('corretores', $this->model['corretor']->get_all());
        $this->view->assign('success_exclude',Session::get('success_exclude'));
        $this->view->assign('count',$count);
        $this->view->assign('filtros',!is_null($comparecimento) || !is_null($corretor) ? true : false);
        $this->view->display('extends:layout/app.html|cliente/lista.html');
        Session::destroy('success_exclude');
    }

    public function valide_cpf($cpf=null){
        if( !is_null($cpf)){
            $cpount = Cliente::count(array('conditions' => "cpf_cnpj = '{$cpf}'"));
            if($cpount > 0){
                echo json_encode(array('cliente'=>true));
            } else {
                echo json_encode(array('cliente'=>false));
            }
        }
    }

    public function search(){
        header('Content-Type: application/json');
        if(isset($_GET['termo'])){
            $termo = $_GET['termo'];
            $res = Cliente::find('all', array(
                'conditions'=> array(
                    " nome LIKE '%{$termo}%'
                      "
                    )
                )
            );
            $json = [];
            foreach ($res as $cliente) {
                $json[] = $cliente->to_array();
            }
            echo json_encode($json , JSON_PRETTY_PRINT);
        }
    }

    public function edit($id=null){
        if(!is_null($id)){
            $estado = $this->model['estado']->get_estados();

            $cliente = Cliente::find(array('conditions'=>'status = 0 AND id = '.$id) );


            $this->view->assign('cliente',$cliente);
            $this->view->assign('estados', $estado);
            $this->view->assign('erros',Session::get('erro'));
            $this->view->assign('post',Session::get('erro'));
            $this->view->assign('corretores', $this->model['corretor']->get_all());
            $this->view->display('extends:layout/app.html|cliente/edit.html');
            Session::destroy('post');
            Session::destroy('erro');
        }
    }


    public function compareceu(){
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            date_default_timezone_set('America/Fortaleza');
            try {
                $cliente = Cliente::find($id);
                $cliente->update_attributes(array('comparecimento'=>$_POST['status'], 'com_data'=>date('Y-m-d H:i:s') ));
                echo json_encode($cliente->to_array());
            } catch (Exception $e) {
                echo json_encode($e->getMessage());
            }
        }
    }
}