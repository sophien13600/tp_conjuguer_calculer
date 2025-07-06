<?php

include  "../config/db.php";

$username =MYSQL['username'];
$password=MYSQL['password'];
$dbname =MYSQL['dbname'];
$port =MYSQL['port'];
$host =MYSQL['host'];

function get_connection()
{
    //global permet d'acceder a une variable definit à l'exterieur d'une fonction
    global $host, $dbname, $port, $username, $password;

    try {
        $dsn = "mysql:host=$host;dbname=$dbname;port=$port;charset=utf8";
        $pdo = new PDO($dsn, $username, $password);
        //pour plus de precision on recommande pdo::attr pour avoir des messages d'erreur plus specifiques
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
        return null;
    }
}