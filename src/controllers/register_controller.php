<?php
require "../repositories/register_repository.php";

if(str_contains($_SERVER['HTTP_REFERER'], "/") and $_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $pwd = $_POST['password'];
    $resultat = register_new_user($name,$email, $pwd);
    if($resultat){
        
        header("location: /");
    }
} 