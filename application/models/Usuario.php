<?php

class Usuario extends Model{
    
    static $table_name = 'usuario';

    static $validates_presence_of = array(
            array('nome', 'message' => 'não pode ser em branco'),
            array('email', 'message' => 'não pode ser em branco'),
            array('senha', 'message' => 'não pode ser em branco')
    );

    static $belongs_to = array(
            array('corretor', 'class_name'=> 'Corretor')
    );
}
