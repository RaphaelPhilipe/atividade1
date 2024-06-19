<?php

$server = "localhost";
$database = "api62";
$user = "root";
$pass = "";
$cdn = "mysql:host=$server;dbname=$database";

try{
    $conn = new PDO($cdn, $user, $pass);

    header('Content-Type: aplication/json');

}catch(PDOException $E){
    echo "Erro de Conexao ".$E->getMessage();
}

?>