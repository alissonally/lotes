<?php 

/**
* Classe para configuração de menus
* @author Alisson S de Araujo
* @version 1.0 16/04/2014	
*/

class Menu extends View{
	/*
	* Atributo deve receber um array multidemensional contendo url e titulo
	*/
	public $menu = array();

	public function __construct() {
        parent::__construct(); 
        
    }    
	/*
	* recebe o nível de acesso e monta o menu de acordo com o nivel
	*/
	public function montaMenu($nivel){
		switch ($nivel) {
			case 'Administrador':
				$this->menu = array(
					array(
						'url'=>URL_FULL.'usuario/',
						'title'=>'Usuários',
						'pagina'=>'usuario'
					 	),
					array(
						'url'=>URL_FULL.'midia/',
						'title'=>'Mídia',
						'pagina'=>'midia'
					 	),
					/*array(
						'url'=>URL_FULL.'configuracao/',
						'title'=>'Configurar sistema'
					 	)*/
					); 
				break;
			
			default:
				# code...
				break;
		}
		return json_decode(json_encode($this->menu));
	}	
}
 ?>
