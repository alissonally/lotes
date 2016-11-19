<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author alissonaraujo
 */
require_once APP_PATH .'core/Database.php'; 

abstract class Model extends \ActiveRecord\Model {
    // protected $db;
    // function __construct() {
    //     $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER ,DB_PASS ,DB_CHAR);
    // }

}

?>
