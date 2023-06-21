<?php
include_once("includes/connection.php");

$nome = $_POST['Nome'];
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
$uf = $_POST['UF'];

$erro = false;

$resultado_usuario = mysqli_query($conexao,"select CPF from fichapaciente where CPF = '$cpf'");
if(($resultado_usuario) AND ($resultado_usuario -> num_rows != 0)){
    $erro = true;
}

$resultado_usuario = mysqli_query($conexao,"select Email from fichapaciente where Email = '$email'");
if(($resultado_usuario) AND ($resultado_usuario -> num_rows != 0)){
    $erro = true;
}

$resultado_usuario = mysqli_query($conexao,"select Contato from fichapaciente where Contato = '$contato'");
if(($resultado_usuario) AND ($resultado_usuario -> num_rows != 0)){
    $erro = true;
}

if(!$erro){
    mysqli_query($conexao, "insert into fichapaciente
    (NomePaciente,DataNascimento,CPF,Email,Contato,CEP,Bairro,Endereco,Numero,Complemento,Municipio,UF) 
    values ('$nome','$data','$cpf','$email','$contato','$cep','$bairro','$rua','$numero','$complemento','$municipio','$uf')");
    
    header("Location: pacientes.php");
}
header("Location: pacientes.php");
?>