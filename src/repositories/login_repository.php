<?php
require "../config/connection.php";
function check_login($email, $pwd){
    try {
    $select = "SELECT * FROM  user WHERE email = :mail AND password = :pwd";
    $pdo = get_connection();
    $query = $pdo->prepare($select);
    $query->bindValue(":mail", $email);
    $query->bindValue(":pwd", $pwd);
    $query->execute();
    return $query->fetch();
    } catch (PDOException $ex) {
    echo "\nErreur : problème de connexion avec la BD" . $ex->getMessage();
    }
   
}
       
?>