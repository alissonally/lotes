<?php

class Corretor extends Model{

    static $table_name = 'corretor';

    static $validates_presence_of = array(
            array('nome', 'message' => 'não pode ser em branco'),
            array('email', 'message' => 'não pode ser em branco'),
            array('fone', 'message' => 'não pode ser em branco'),
            array('creci', 'message' => 'não pode ser em branco')
    );

    // static $validates_uniqueness_of = array(
    //     array('creci')
    // );

    static $has_many = array(
        array('lote', 'foreign_key' => 'corretor_id', 'class_name' => 'Terreno'),
        array('cliente', 'foreign_key' => 'corretor_id', 'class_name' => 'Cliente')
    );

    public function get_all(){
        return self::find('all',array('order'=>'nome asc'));
    }

    public function  get_corretores($limit, $page){
        $pagina = isset($page) ? $page : 1;
        $offset = ($pagina * $limit) - $limit;
        $users = self::find('all',
            array(
                'order'=>'id desc', 'limit'=>$limit, 'offset' => $offset
            )
        );
        return $users;
    }

    public function count_corretores(){
       return self::count();
    }

    public function get_search($termo){
        // $pagina = isset($page) ? $page : 1;
        // $offset = ($pagina * $limit) - $limit;
        $users = self::find('all',
            array(
                'conditions'=>
                array(
                    "nome LIKE '%".$termo."%'
                     OR creci LIKE  '%".$termo."%' "
                    )
                //'limit'=>$limit, 'offset' => $offset
                )
            );
        return $users;
    }

}