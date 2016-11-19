<?php

class Cidade extends Model{


    static $table_name = 'cidade';

    static $has_many = array(
        array('endereco', 'class_name' => 'Endereco', 'order' => 'id asc'),
    );

    static $belongs_to = array(
        array('uf', 'foreign_key' => 'estado', 'class_name' => 'Estado')
    );

    public function get_all_by_uf($estado_id){
        $uf = self::find('all',array('conditions'=>array('estado='.$estado_id), 'order'=>'nome asc'));
        //var_dump(self::connection()->last_query);
        return $uf;
    }

}