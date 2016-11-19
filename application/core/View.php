<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SmartyConfig
 *
 * @author Alisson
 */
require_once SMARTY_DIR .DS.'Smarty.class.php';

class View extends Smarty{
    protected $_params=array();
    protected $_config_app=array();
    public $current_controller='';
    function __construct() {
        parent::__construct();
        $this->setCacheDir(SMARTY_DIR . "cache");
        $this->setConfigDir(SMARTY_DIR . "configs");
        $this->setCompileDir(SMARTY_DIR . "templates_c");
        $this->setPluginsDir(SMARTY_DIR . "plugins");
        $this->setTemplateDir(VIEWS);
        //$this->setCaching(Smarty::CACHING_LIFETIME_CURRENT);
        //$this->debugging = true;


    }

    public function __set($name, $value) {
        $this->assign($name, $value);
    }

}
