<?php
require "../repositories/login_repository.php";

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $resultat = check_login($email, $pwd);
     if ($resultat) {
        // utilisteur authéntifié
        $_SESSION['name'] = $resultat[0];
        $_SESSION['mail'] = $resultat[1];
        header("location: ../../views/dashboard.php");
        die();
    }  else {
        // Identifiants incorrects
        header("location: /");
        die();
    }
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    session_unset();
    session_destroy();
        header("location: /");
    die();
}