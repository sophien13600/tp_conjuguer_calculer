<?php

session_start();
if (!isset($_SESSION['name'])) {
    header("location: /");
    die();
}
require "../views/partials/head.php";
require "../views/partials/nav.php";
require "../views/partials/input_conjugaison.php";
require "../views/partials/footer.php";
?>