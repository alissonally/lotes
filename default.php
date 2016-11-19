<?php
ini_set('memory_limit', '256M');

error_reporting(E_ALL);
ini_set('display_errors', '1');

//date_default_timezone_set('America/Fortaleza');
setlocale(LC_ALL,'pt_BR');


define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('APP_PATH', ROOT . 'application' . DS);
define('ASSETS_PATH', ROOT . 'public' . DS.'assets'.DS);
define('LIBS', APP_PATH .'libs' .DS);
define('VIEWS', APP_PATH .'views' .DS);
define('HELPERS', APP_PATH .'helpers' .DS);
define('SMARTY_DIR', LIBS .'smarty' .DS);
define('SISCAD_URL', '/sbf/2014/siscad/');
define('UPLOADS',  ROOT .'public'.DS.'uploads');

try{
    require_once APP_PATH . 'core'.DS.'Core.php';
    require_once APP_PATH . 'config'.DS.'DbConfig.php';
    require_once APP_PATH . 'config'.DS.'Config.php';
    require_once APP_PATH . 'config'.DS.'RoutesConfig.php';
    Session::init();
    $init = new Boostrap();
    $init->init();
}
 catch (Exception $e){
    include APP_PATH.'controllers/exceptionController.php';
    $exception = new exceptionController();
    $exception->exception($e->getMessage());

}

