<?php
    session_start();
    function isLogged(){
        return !empty($_SESSION['email']);
    }
    function redirect_on_signin(){
        if(isLogged()){
            header("Location: /bookia/home.php");
            exit;
        }
    }
    function redirect_on_logout(){
        if(!isLogged()){
            header("Location: /bookia/signin.php");
            exit;
        }
    }

    function isSeller(){
        return $_SESSION['role'] === 'seller';
    }