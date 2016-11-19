<?php

class Endereco extends Model{


    static $table_name = 'endereco';

    // static $validates_presence_of = array(
    //         array('telefone', 'message' => 'não pode ser em branco')
    // );

    static $belongs_to = array(
        array('city', 'foreign_key' => 'cidade', 'class_name' => 'Cidade')
    );

    public function get_estados(){
        $uf = self::find('all',array('order'=>'nome asc'));
        return $uf;
    }

}