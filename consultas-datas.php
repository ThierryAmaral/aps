<?php

include_once("includes/connection.php");

header('Content-Type: application/json; charset=utf-8');

$data = $_GET['data'];

$obj = [];

$consultas = $conn->prepare("SELECT DataHora FROM consultas WHERE DataHora LIKE ?");
$consultas->execute(array("$data%"));
$rowsConsultas = $consultas->fetchAll(PDO::FETCH_ASSOC);

foreach ($rowsConsultas as $rc) {
    $hora = Date("H:i", strtotime($rc['DataHora']));
    array_push($obj, $hora);
}

echo json_encode($obj, JSON_UNESCAPED_UNICODE);

?>