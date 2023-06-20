<?php
include_once("includes/connection.php");

$result = $conn->prepare("UPDATE fichapaciente SET NomePaciente = :Nome, DataNascimento = :Data, CPF = :CPF, Email = :Email, Contato = :Contato, CEP = :CEP, Bairro = :Bairro, Endereco = :Rua, Numero = :Numero, Complemento = :Complemento, Municipio = :Municipio, UF = :UF WHERE id = :id");
$result->bindParam(":id", $_POST['id']);
$result->bindParam(":Nome", $_POST['Nome']);
$result->bindParam(":Data", $_POST['Data']);
$result->bindParam(":CPF", $_POST['CPF']);
$result->bindParam(":Email", $_POST['Email']);
$result->bindParam(":Contato", $_POST['Contato']);
$result->bindParam(":CEP", $_POST['CEP']);
$result->bindParam(":Bairro", $_POST['Bairro']);
$result->bindParam(":Rua", $_POST['Rua']);
$result->bindParam(":Numero", $_POST['Numero']);
$result->bindParam(":Complemento", $_POST['Complemento']);
$result->bindParam(":Municipio", $_POST['Municipio']);
$result->bindParam(":UF", $_POST['UF']);
$result->execute();
if ($result) {
    header("Location: pacientes.php");
}
?>