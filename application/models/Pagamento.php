<?php

class Pagamento extends Model{


    static $table_name = 'pagamento';


    public function get_estados(){
        $uf = self::find('all',array('order'=>'nome asc'));
        return $uf;
    }

}