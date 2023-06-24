<?php
include_once("includes/connection.php");

session_start();

$nome = isset($_POST['Nome']) ? $_POST['Nome'] : "";
$data = isset($_POST['Data']) ? $_POST['Data'] : "";
$cpf = isset($_POST['CPF']) ? $_POST['CPF'] : "";
$email = isset($_POST['Email']) ? $_POST['Email'] : "";
$contato = isset($_POST['Contato']) ? $_POST['Contato'] : "";
$cep = isset($_POST['CEP']) ? $_POST['CEP'] : "";
$bairro = isset($_POST['Bairro']) ? $_POST['Bairro'] : "";
$rua = isset($_POST['Rua']) ? $_POST['Rua'] : "";
$numero = isset($_POST['Numero']) ? $_POST['Numero'] : "";
$complemento = isset($_POST['Complemento']) ? $_POST['Complemento'] : "";
$municipio = isset($_POST['Municipio']) ? $_POST['Municipio'] : "";
$uf = isset($_POST['UF']) ? $_POST['UF'] : "";

$resultado_usuario = $conn->prepare("SELECT CPF FROM fichapaciente WHERE CPF = :CPF");
$resultado_usuario->bindParam(":CPF", $cpf);

if ($resultado_usuario->execute()) {
    $row = $resultado_usuario->fetch(PDO::FETCH_ASSOC);
    if ($row['CPF'] == $cpf) {
        $_SESSION['mensagem'] = "CPF já cadastrado.";
        header('Location: pacientes.php');
        exit();
    }

}

$insert = $conn->prepare("INSERT INTO fichapaciente
    (NomePaciente,DataNascimento,CPF,Email,Contato,CEP,Bairro,Endereco,Numero,Complemento,Municipio,UF) 
    VALUES (:nome,:data,:cpf,:email,:contato,:cep,:bairro,:rua,:numero,:complemento,:municipio,:uf)");
$insert->bindParam(":nome", $nome);
$insert->bindParam(":data", $data);
$insert->bindParam(":cpf", $cpf);
$insert->bindParam(":email", $email);
$insert->bindParam(":contato", $contato);
$insert->bindParam(":cep", $cep);
$insert->bindParam(":bairro", $bairro);
$insert->bindParam(":rua", $rua);
$insert->bindParam(":numero", $numero);
$insert->bindParam(":complemento", $complemento);
$insert->bindParam(":municipio", $municipio);
$insert->bindParam(":uf", $uf);

if ($insert->execute()) {
    $_SESSION['mensagem'] = "Paciente salvo com sucesso.";
    header('Location: pacientes.php');
    exit();
} else {
    $_SESSION['mensagem'] = "Falha ao salvar paciente.";
    header('Location: pacientes.php');
    exit();
}

?>