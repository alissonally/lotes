<?php

class secretariaController extends AppController{

    protected $helper = 'localize';

    public function __construct() {
        parent::__construct();
        $this->loadModel('Cliente');
        $this->loadModel('Corretor');
        $this->loadModel('Terreno');
        if($this->usuario->nivel ==Estatico::CORRETOR ){
            redirect(base_url());
        }
    }

    public function index() {

        $contagem['lotes'] = Terreno::count();
        $contagem['lotes_v'] = Terreno::count(array('conditions' => array("status = 1 ")));
        $contagem['clientes'] = Cliente::count();
        $contagem['corretores'] = Corretor::count();
        $this->view->assign('contagem',(object)$contagem);
        $this->view->display('extends:layout/app.html|secretaria/index.html');
    }//index


    public function cliente($id){
        try {
           $res = Cliente::find(array('conditions'=>'status = 0 AND id = '.$id) );
        }
        catch (ActiveRecord\RecordNotFound $e) {

        }

        $this->view->assign('cliente',$res);
        $this->view->assign('lotes',Terreno::all(array('conditions'=>'status = 0 ')));
        $this->view->assign('success',Session::get('success'));
        $this->view->display('extends:layout/app.html|secretaria/cliente.html');
        Session::destroy('success');
    }

    public function venda(){

        if(isset($_POST['lote']) && !empty($_POST['lote'])) {
            try {
                $lote = Terreno::find(array('conditions'=>' id = '.$_POST['lote']));

                var_dump($lote);
                $save = $lote->update_attributes(
                    array(
                        'cliente_id'=> $_POST['cliente_id'],
                        'corretor_id'=> $_POST['corretor_id'],
                        'status'=> 1
                    )
                );
                if($save){
                    if(isset($_POST['cliente_to_corretor'])){
                        //echo json_encode(array('save'=>true));
                        Session::set('success', 'Cliente adicionado com sucesso');
                        header('Location:'. base_url('secretaria/reserva?corretor='.$_POST['corretor_id'].'#table-lotes'));
                    } else {
                        Session::set('success', 'Lote adicionado');
                        header('Location:'. base_url('secretaria/cliente/'.$_POST['cliente_id'] ));
                    }
                }
            } catch (Exception $e) {

            }
        } else {
            header('Location:'.$_SERVER['HTTP_REFERER']);
        }
    }


    public function corretor(){
        $terreno = Terreno::find_by_sql('select c.id, c.nome as corretor, count(t.id) as total from terreno as t
            inner join corretor as c on c.id = t.corretor_id
            where t.`status` = 1
            group by c.id, c.nome
            order by total desc
            limit 10');

        $this->view->assign('lotes',$terreno);
        //$this->view->assign( 'lotes',Terreno::count(array('conditions'=>'status = 1 ')));
        $this->view->assign('corretores',Corretor::all());
        $this->view->display('extends:layout/app.html|secretaria/corretor.html');
    }

    public function reserva(){
        //var_dump($_POST); die();
        if(isset($_GET['corretor']) && !empty($_GET['corretor'])){
            $corretor= "";
            try {
                $corretor = Corretor::find($_GET['corretor']);

            } catch (Exception $e) {

            }

            $this->view->assign('corretor',$corretor);
            $this->view->assign('success',Session::get('success'));
            $this->view->display('extends:layout/app.html|secretaria/reserva_corretor.html');
            Session::destroy('success');
        } else {
            throw new Exception("Erro na requisição", 1);
        }
    }


    public function venda_corretor(){
        if(isset($_POST['lote'])) {
            try {
                $lote = Terreno::find(array('conditions'=>'status = 0 AND id = '.$_POST['lote']));
                $save = $lote->update_attributes(
                    array(
                        'corretor_id'=> $_POST['corretor_id'],
                        'status'=> 1
                    )
                );
                if($save){
                    Session::set('success', 'Lote adicionado');
                    header('Location:'. base_url('secretaria/reserva?corretor='.$_POST['corretor_id']));
                }
            } catch (Exception $e) {

            }
        }
    }



    public function remove_lote(){
        if(isset($_POST['id'])) {
            try {
                $lote = Terreno::find(array('conditions'=>'id = '.$_POST['id']));
                $save = $lote->update_attributes(
                    array(
                        'corretor_id'=> null,
                        'cliente_id' => null,
                        'status'=> 0,
                    )
                );
                if($save){
                    echo json_encode(array('del'=>true));
                } else {
                    echo json_encode(array('del'=>false));
                }
            } catch (Exception $e) {

            }
        }
    }
}