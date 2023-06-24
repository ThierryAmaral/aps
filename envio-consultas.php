<?php 

include_once("includes/connection.php");

session_start();

$usuario = isset($_POST['usuario_consulta']) ? $_POST['usuario_consulta'] : "";
$data = isset($_POST['data_consulta']) ? $_POST['data_consulta'] : "";
$tipo = isset($_POST['tipo_consulta']) ? $_POST['tipo_consulta'] : "";
$hora = isset($_POST['options']) ? $_POST['options'] : "";
$motivo = isset($_POST['motivo_consulta']) ? $_POST['motivo_consulta'] : "";
$status = "aguardando";

$datahora = $data." ".$hora;



$insert_consulta = $conn->prepare("INSERT INTO consultas (MotivoConsulta, DataHora, FormaPagamento, Status, FichaPaciente_id) VALUES (:motivo, :datahora, :tipo, :status, :usuario)");
$insert_consulta->bindParam(":motivo", $motivo);
$insert_consulta->bindParam(":datahora", $datahora);
$insert_consulta->bindParam(":tipo", $tipo);
$insert_consulta->bindParam(":status", $status);
$insert_consulta->bindParam(":usuario", $usuario);

if($insert_consulta->execute()){
    $_SESSION['mensagem'] = "Consulta salva com sucesso.";
    header('Location: consulta.php');
    exit();
}else{
    $_SESSION['mensagem'] = "Falha ao salvar consulta.";
    header('Location: consulta.php');
    exit();
}

?>