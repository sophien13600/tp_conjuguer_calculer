<?php

session_start();
//Si l'utilisateur n'est pas connecté il ne peux pas acceder a la page du dashboard
if (!isset($_SESSION['name'])) {
    header("location: /");
    die();
}
$name =$_SESSION['name'];
require "./partials/head.php";
require "./partials/nav.php";
require "./partials/footer.php";
?>