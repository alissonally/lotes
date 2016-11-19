<?php

class Estado extends Model{


    static $table_name = 'estado';


    public function get_estados(){
        $uf = self::find('all',array('order'=>'nome asc'));
        return $uf;
    }

}