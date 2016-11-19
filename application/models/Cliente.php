<?php

class Cliente extends Model{


    static $table_name = 'cliente';
    static $validates_presence_of = array(
            array('nome', 'message' => 'não pode ser em branco'),
            //array('cpf_cnpj', 'message' => 'não pode ser em branco'),
            //array('rg', 'message' => 'não pode ser em branco'),
            array('corretor_id', 'message' => 'não pode ser em branco')
    );

    static $has_many = array(
	    array('endereco', 'foreign_key' => 'cliente_id', 'class_name' => 'Endereco'),
        array('lote', 'foreign_key' => 'cliente_id', 'class_name' => 'Terreno')
	);

    static $belongs_to = array(
        array('corretor', 'foreign_key' => 'corretor_id', 'class_name' => 'Corretor')
    );


    public function get_estados(){
        $uf = self::find('all',array('order'=>'nome asc'));
        return $uf;
    }


    public function  get_clientes($limit, $page, $corretor=null, $comprarecimento=null){
		$pagina = isset($page) ? $page : 1;
		$offset = ($pagina * $limit) - $limit;
        $where = ' AND 1=1 ';
        if(!is_null($corretor)){
            $where .=" AND corretor_id = {$corretor} ";
        }
        if(!is_null($comprarecimento)){
            $where .=" AND comparecimento = {$comprarecimento} ";
        }
		$users = self::find('all',
			array(
				'conditions' => array("status = 0 ". $where),
				'order'=>'id desc', 'limit'=>$limit, 'offset' => $offset
			)
		);

		return $users;
	}

    public function count_clientes($corretor=null, $comprarecimento=null){
        $where = ' AND 1=1 ';
        if(!is_null($corretor)){
            $where .=" AND corretor_id = {$corretor} ";
        }
        if(!is_null($comprarecimento)){
            $where .=" AND comparecimento = {$comprarecimento} ";
        }
       return self::count(array('conditions' => array("status = 0 {$where} ")));
    }

    public function get_search($termo){
        // $pagina = isset($page) ? $page : 1;
        // $offset = ($pagina * $limit) - $limit;
        $users = self::find('all',
            array(
                'conditions'=>
                array(

                    " nome LIKE '%".$termo."%'
                     OR cpf_cnpj LIKE  '%".$termo."%' "

                    )
                //'limit'=>$limit, 'offset' => $offset
                )
            );
        return $users;
    }

    public function valide_cpf($cpf){
        $cpount = self::count(array('conditions' => "cpf_cnpj = '{$cpf}'"));
        return $cpount;
    }
}

