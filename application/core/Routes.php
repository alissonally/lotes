<?php

/**
* 
*/
abstract class Routes{
	
  protected static $instance = null;
  protected $data;

  function __construct(){
    $this->data = array();
    $this->init();
  }

  public function addRoute($url, $conect){
    #var_dump($url);
    $this->data[$url] = $conect;
  }

  public function getRoute($url){
    $url = implode('/', $url);
    

    foreach ($this->data as $_url => $config) {

      if($url == $_url){
        return array_values($config);
      }

      $matches = array();
      preg_match_all('@'.$_url.'@i', $url, $matches);
      #var_dump($matches);
      if(isset($matches[1]) && count($matches[1]) > 0){
        $config = array_merge(array_values($config), $matches[1]);
        return $config;
      }
    }

    return null;
  }

  public static function getInstance(){
    if(static::$instance == null)
      static::$instance = new RoutesConfig();
    return static::$instance;
  }
}

