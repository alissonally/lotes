<?php

class Terreno extends Model{


    static $table_name = 'terreno';

    static $belongs_to = array(
        array('cliente', 'foreign_key' => 'cliente_id', 'class_name' => 'Cliente'),
        array('corretor', 'foreign_key' => 'corretor_id', 'class_name' => 'Corretor')
    );

    public function get_estados(){
        $uf = self::find('all',array('order'=>'nome asc'));
        return $uf;
    }

}