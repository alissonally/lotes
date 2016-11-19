<?php

class usuarioController extends AppController{

    protected $helper = 'localize';

    public function __construct() {
        parent::__construct();
        $this->loadModel('Usuario');
        $this->loadModel('Corretor');


    }

    public function index() {
        $this->access();
        $this->pg(1);
    }//index


    public function access(){
        if($this->usuario->nivel !=Estatico::GERENCIA && $this->usuario->nivel !=Estatico::ADMIN){
            redirect(base_url());
        }
    }

    public function pg($pagina=null){
        $this->access();
        $limit = 20;
        $count = Usuario::count();
        $pagina = isset($pagina) ? $pagina : 1;
        $offset = ($pagina * $limit) - $limit;

        $users = Usuario::find('all',
            array(
                'order'=>'id desc', 'limit'=>$limit, 'offset' => $offset
            )
        );

        $pagination_post = new Pagination('usuario',$pagina, $limit, $count);
        $this->view->assign('count',$count);
        $this->view->assign('usuarios', $users);

        $this->view->assign('paginacao',$pagination_post->paginacao());
        $this->view->assign('success',Session::get('success'));
        $this->view->assign('erro',Session::get('erro'));
        $this->view->display('extends:layout/app.html|user/lista.html');
        Session::destroy('success');
        Session::destroy('erro');
    }

    public function novo() {
        $this->access();
        $this->view->assign('erros',Session::get('erro'));
        $this->view->assign('update',Session::get('update'));
        $this->view->assign('user',Session::get('post'));
        $this->view->display('extends:layout/app.html|user/user.html');
        Session::destroy('erro');
        Session::destroy('post');
    }//index

    public function edit($id){
        $this->access();
        if(!is_null($id)){
            $usuario = Usuario::find($id);
            $this->view->assign('user',$usuario);
            $this->view->assign('label','Usuário');
            $this->view->assign('erros',Session::get('erro'));
            $this->view->assign('update',Session::get('update'));
            $this->view->display('extends:layout/app.html|user/user.html');
            Session::destroy('erro');
            Session::destroy('update');
        }
    }

    public function perfil(){

        $perfil = Usuario::find($this->usuario->id);
        $this->view->assign('user',$perfil);
        $this->view->assign('label','Editar informações');
        $this->view->assign('erros',Session::get('erro'));
        $this->view->assign('update',Session::get('update'));
        $this->view->display('extends:layout/app.html|user/perfil.html');
        Session::destroy('erro');
        Session::destroy('update');

    }

    public function create(){
        if(isset($_POST)){
            if(empty($_POST['id'])){
                $_POST['senha'] = !empty($_POST['senha']) ? Hash::create('sha1', $_POST['senha'], HASH_PASSWORD_KEY) : '';
                $user = new Usuario($_POST);
                if (!$user->is_valid()){
                    Session::set('erro', $user->errors->full_messages());
                    Session::set('post', $_POST);
                    header('Location:'. $_SERVER['HTTP_REFERER']);
                    exit;
                } else {
                    $user->save();
                    Session::set('success', 'Usuário cadastrado');
                    header('Location:'. base_url('usuarios'));
                }
            } else {

                $count_admin = Usuario::count(array('conditions'=>'nivel = 0'));
                $msg  = $count_admin == 1 ? ', Porém o nível não pode ser mudado no últmo administrador.':'';
                $user = Usuario::find($_POST['id']);
                $atts = array(
                    'nome'=>$_POST['nome'],
                    'nivel'=> $count_admin  > 1 ? $_POST['nivel'] : 0,
                    'email'=> $user->email,
                    'senha'=> !empty($_POST['senha']) ? Hash::create('sha1', $_POST['senha'], HASH_PASSWORD_KEY) : $user->senha,
                );

                if($user->update_attributes($atts)) {
                    Session::set('update', 'Usuário atualizado '. $msg );
                } else {
                    Session::set('erro', array('Erro ao atualizar usuário'));
                }
                header('Location:'. base_url('usuario/edit/'.$user->id));
            }
        }
    }


    public function create_perfil(){
        if(isset($_POST)){

            $user = Usuario::find($_POST['id']);
            $atts = array(
                'nome'=>$_POST['nome'],
                'email'=> $user->email,
                'senha'=> !empty($_POST['senha']) ? Hash::create('sha1', $_POST['senha'], HASH_PASSWORD_KEY) : $user->senha,
            );

            if($user->update_attributes($atts)) {
                Session::set('update', 'Perfil atualizado ' );
            } else {
                Session::set('erro', array('Erro ao atualizar usuário'));
            }
            header('Location:'. base_url('usuario/perfil'));
        }
    }

    public function excluir($id){
        $this->access();
        if(!is_null($id)){
            $usuario = Usuario::find($id);

            if($usuario->nivel ==0){
                Session::set('erro', 'Admin não pode ser exluído');
                header('Location:'. base_url('usuarios'));
                exit;
            }

            if($usuario->delete($usuario)){
                Session::set('success', 'Usuário excluído');
                header('Location:'. base_url('usuarios'));
            } else {
                Session::set('erro', 'Erro ao exluir usuário');
                header('Location:'. base_url('usuarios'));
            }
        }
    }


    public function corretor(){
        $this->access();
        $this->view->assign('erros',Session::get('erro'));
        $this->view->assign('update',Session::get('update'));
        $this->view->assign('usuario',Session::destroy('post'));
        $this->view->assign('corretores',Corretor::all());
        $this->view->display('extends:layout/app.html|user/corretor_reg.html');
        Session::destroy('erro');
        Session::destroy('post');
    }

    public function corretor_user(){
        $this->access();
        $corretor = Corretor::find($_POST['corretor']);

        if($corretor !=null){
            $attr = array(
                'nome'=>$corretor->nome,
                'email'=>$_POST['email'],
                'senha'=> Hash::create('sha1',  $_POST['senha'], HASH_PASSWORD_KEY),
                'nivel'=>3,
                'corretor_id'=>$corretor->id,
            );
            $user= new Usuario($attr);
            if (!$user->is_valid()){
                Session::set('erro', $user->errors->full_messages());
                Session::set('post', $_POST);
                header('Location:'. $_SERVER['HTTP_REFERER']);
                exit;
            } else {
                $user->save();
                Session::set('success', 'Usuário cadastrado');
                header('Location:'. base_url('usuarios'));
            }
        }
    }
}