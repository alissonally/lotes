<?php

define('BASE_URL', str_replace( array('http://', 'https://'), array('', ''), base_url()) );
define('URL_FULL', BASE_URL);
define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');
define('URL_UPLOADS', 'public/uploads');
define('VIEWS_URL', URL_FULL.'application/views');

/*
* Configura variaves
*/
function base_url($url=false){
  if (isset($_SERVER['HTTP_HOST'])) {
      $http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
      $hostname = $_SERVER['HTTP_HOST'];
      $dir =  str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

      $core = preg_split('@/@', str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(dirname(__FILE__))), NULL, PREG_SPLIT_NO_EMPTY);
      $core = $core[0];

      $tmplt = "%s://%s%s";
      $end = $dir;
      $base_url = sprintf( $tmplt, $http, $hostname, $end );
  } else {
      $base_url = 'http://localhost/';
  }

  $base_url = $url ? $base_url . $url : $base_url;
  return $base_url;
}
/**
 * @return array na variavel $aplication do smarty (Ex: $aplication.app)
 */

$config_app = array(
	'sitename'=>" Gestão de Proposta",
  'css' => base_url() . 'public/assets/css/',
  'img' => base_url() . 'public/assets/img/',
  'js' => base_url() . 'public/assets/js/',
  'app' => base_url() ,
  'app_full_url' => URL_FULL ,
  'pagina' =>  isset($_GET['url']) ? rtrim($_GET['url'], '/') : 'inicio',
  'url_api'=>"http://apiv2.mobieduca.me/",
  'assets_path'=>ASSETS_PATH,
  'views' =>VIEWS_URL,
);

/*
 // status de frequencia
  const ST_NORMAL   = 'F';
  const ST_ATESTADO = 'A';
  const ST_ESTORNO  = 'E';
  const ST_SEM_AULA = 'N';

*/

class Estatico{


  Const ADMIN=0;
  Const GERENCIA=1;
  Const SECRETARIA=2;
  Const CORRETOR=3;

  static $compa =  array(
    '0'=>'Ainda não compareceu',
    '1'=>'Compareceu',
  );

  static $nivel =  array(
    '0'=>'Administrador',
    '1'=>'Gerencia',
    '2'=>'Secretaria',
    '3'=>'Corretor',
  );


  static $class =  array(
    '0'=>'danger',
    '1'=>'success',
  );


  public static function comparecimento($key){
    return self::$compa[$key];
  }

  public static function classe($key){
    return self::$class[$key];
  }

  public static function nivel($key){
    return self::$nivel[$key];
  }

}

function redirect($to){
  return header('Location:'.$to);
}