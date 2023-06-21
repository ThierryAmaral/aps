<?php
include_once("includes/connection.php");

$id = $_GET['id'];
$status = $_GET['status'];

$result = $conn->prepare("UPDATE consultas SET Status = :status WHERE id = :id");
$result->bindParam(":id", $id);
$result->bindParam(":status", $status);
$result->execute();
if ($result) {
    header("Location: consulta.php");
}

?>