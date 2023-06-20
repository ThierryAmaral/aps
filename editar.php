<?php
include_once("includes/connection.php");

$result = $conn->prepare("UPDATE fichapaciente SET NomePaciente = :Nome, CPF = :CPF, Email = :Email WHERE id = :id");
$result->bindParam(":id", $_POST['id']);
$result->bindParam(":Nome", $_POST['Nome']);
$result->bindParam(":Nome", $_POST['Nome']);
$result->bindParam(":CPF", $_POST['CPF']);
$result->bindParam(":Email", $_POST['Email']);
$result->execute();
if ($result) {
    header("Location: pacientes.php");
}

?>
<!-- $nome = $_POST['Nome'];
$data = $_POST['Data'];
$cpf = $_POST['CPF'];
$email = $_POST['Email'];
$contato = $_POST['Contato'];
$cep = $_POST['CEP'];
$bairro = $_POST['Bairro'];
$rua = $_POST['Rua'];
$numero = $_POST['Numero'];
$complemento = $_POST['Complemento'];
$municipio = $_POST['Municipio'];
$uf = $_POST['UF']; -->