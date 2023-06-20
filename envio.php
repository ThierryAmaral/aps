<?php
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'saudesempre');

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


mysqli_query($conexao, "insert into fichapaciente
(NomePaciente,DataNascimento,CPF,Email,Contato,CEP,Bairro,Endereco,Numero,Complemento,Municipio,UF) 
values ('$nome','$data','$cpf','$email','$contato','$cep','$bairro','$rua','$numero','$complemento','$municipio','$uf')");

header("Location: pacientes.php");
?>