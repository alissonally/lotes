<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author alissonaraujo
 */
require_once LIBS .'activerecord/ActiveRecord.php';

class Database {

    /**
   * Inicializa as configurações
   **/
  public static function init(){

    if(!file_exists(APP_PATH.'config/DbConfig.php'))
      throw new NotFoundException("Class DbConfig Not Found, Check Your App Config Folder!");

    $default = 'development';


    $connections = DbConfig::$connections;

    ActiveRecord\Config::initialize(function($cfg) use ($connections, $default)
    {

      $cfg->set_model_directory(APP_PATH.'models');
      $cfg->set_connections($connections);
      $cfg->set_default_connection($default);

    });
    ActiveRecord\Connection::$datetime_format = 'Y-m-d H:i:s';
    ActiveRecord\DateTime::$FORMATS['br'] = 'd/m/Y H:i:s';
    ActiveRecord\DateTime::$DEFAULT_FORMAT = 'br';

  }

}

//inicializando configuracoes de banco de dados
Database::init();