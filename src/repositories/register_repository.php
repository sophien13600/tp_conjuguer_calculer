<?php
require "../config/connection.php";
function register_new_user($name, $email, $pwd){
    try {
    $insert = "INSERT INTO  user (nom_complet, email, password) VALUES ( :name, :mail, :pwd)";
    $pdo = get_connection();
    $query = $pdo->prepare($insert);
    $query->bindValue(":name", $name);
    $query->bindValue(":mail", $email);
    $query->bindValue(":pwd", $pwd);
    $query->execute();
    $query->fetch();
    } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la BD" . $ex->getMessage();
    }
   
}
       
?>