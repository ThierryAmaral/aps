<?php
include_once("includes/connection.php");

$result = $conn->prepare("DELETE FROM fichapaciente WHERE id = :id");
$result->bindParam(":id", $_POST['id']);
$result->execute();
if ($result) {
    header("Location: pacientes.php");
}

?>