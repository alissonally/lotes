<?php
/**
 * 
 */
class Auth
{
    
    public static function handleLogin()
    {
        @session_start();
        $logged = $_SESSION['logged'];
        if ($logged == false) {
            session_destroy();
            header('location: ../login');
            exit;
        }
    }
    
}