<?php
function loadCore($class){ 
    if(file_exists(APP_PATH .'core'.DS. ucfirst(strtolower($class)) . '.php')){
        require_once APP_PATH .'core'.DS. ucfirst(strtolower($class)) . '.php';
    } 
}

function autoloadLibs($class){     
    if(file_exists( LIBS . $class . '.php')){
        require_once  LIBS .  $class . '.php';
    }
    
}

spl_autoload_register('loadCore');
spl_autoload_register('autoloadLibs');

if(file_exists(APP_PATH .'controllers/AppController.php')){ //inclue o AppController; classe que valida autenticação no sistema
    require_once (APP_PATH .'controllers/AppController.php');
}

?>
