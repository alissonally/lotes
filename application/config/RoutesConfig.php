<?php
class RoutesConfig extends Routes{

	/**
	* Configuracao de rotas do framworks
	* addRoute(param01=controller, param02=metodo, param3=url)
	*/
	public function init(){
		parent::addRoute('slug/([a-z0-9-]+)', array('controller'=>'noticia','action'=>'detalhes'));
		parent::addRoute('id/([a-z0-9-]+)', array('controller'=>'corretor','action'=>'id'));
		parent::addRoute('noticias', array('controller'=>'noticia','action'=>'listar'));
		parent::addRoute('escolas', array('controller'=>'escola', 'action'=>'lista'));
		parent::addRoute('usuarios', array('controller'=>'usuario', 'action'=>'index'));

	}
}