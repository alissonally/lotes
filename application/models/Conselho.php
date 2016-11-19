<?php 

class Conselho extends Model{
    static $table_name = 'me_conselho';
    static $attr_prefix = 'me_';
    // static $validates_presence_of = array(
    //         array('titulo', 'message' => 'não pode ser em branco'),
    //         array('conteudo', 'message' => 'não pode ser em branco'),
    //         array('slug', 'message' => 'não pode ser em branco'),
    // );

    // static $validates_uniqueness_of = array(
    //     array('slug', 'message' => 'está sendo usado')
    // );

    public function  get_noticias($limit, $page){
        $pagina = isset($page) ? $page : 1;
        $offset = ($pagina * $limit) - $limit; 
        $users = self::find('all',array('order'=>'id desc', 'limit'=>$limit, 'offset' => $offset));
        return $users;
    }

    public function count_noticias(){
       return self::count();
    }

    public function get_count_search($termo){
        return self::count(array(
                'conditions'=>
                array(
                    "titulo LIKE '%".$termo."%' 
                     OR conteudo LIKE  '%".$termo."%' "
                    )
                )
            );      
    }
    public function get_noticia($id){
        $app = self::all(array('conditions' => array('id = ? ', $id))); 
        //var_dump(self::connection()->last_query); 
        return $app;
    }

    public function get_search($termo){
        // $pagina = isset($page) ? $page : 1;
        // $offset = ($pagina * $limit) - $limit; 
        $users = self::find('all',
            array(
                'conditions'=>
                array(
                    "escola LIKE '%".$termo."%' 
                     OR inep LIKE  '%".$termo."%' "
                    )
                //'limit'=>$limit, 'offset' => $offset 
                )
            );
        return $users;
    }

}
