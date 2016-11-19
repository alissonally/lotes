<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Msg
 *
 * @author alissonaraujo
 */
class Msg {
   public static function setSuccessMsg($msg){
       return '<div class="alert alert-success" >'.$msg.'<a class="close" data-dismiss="alert" href="#">&times;</a></div>';
   }
   
   public static function setErroMsg($msg){
       return '<div class="alert alert-error" >'.$msg.'<a class="close" data-dismiss="alert" href="#">&times;</a></div>';
   }
}

?>
