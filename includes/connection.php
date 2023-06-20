<?php

$url_db = $_SERVER['HTTP_HOST'];

if($url_db == "127.0.0.1" || $url_db == "localhost"){
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'saudesempre';
}
else {
    $host = '';
    $user = '';
    $pass = '';
    $db = '';
}

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

if(!$conn){
    echo "Não há conexão com o banco de dados!";
    die();
}

?>