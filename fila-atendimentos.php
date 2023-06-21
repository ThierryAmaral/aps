<?php
include_once("includes/connection.php");

session_start();


if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $motivo = $_POST['motivo'];
    $diagnostico = $_POST['diagnostico'];
    $receita = $_POST['receita'];
    $retorno = $_POST['retorno'];
    $descricao = $_POST['descricao'];
    $paciente = $_POST['paciente'];

    $insert = $conn->prepare("INSERT INTO fichaatendimento (MotivoConsulta, Diagnostico, ReceitaRemedios, Retorno, Descricao, FichaPaciente_id) VALUES(:MotivoConsulta, :Diagnostico, :ReceitaRemedios, :Retorno, :Descricao, :FichaPaciente_id)");
    $insert->bindParam(":MotivoConsulta", $motivo);
    $insert->bindParam(":Diagnostico", $diagnostico);
    $insert->bindParam(":ReceitaRemedios", $receita);
    $insert->bindParam(":Retorno", $retorno);
    $insert->bindParam(":Descricao", $descricao);
    $insert->bindParam(":FichaPaciente_id", $paciente);
    $insert->execute();

    if ($insert) {
        $update = $conn->prepare("UPDATE consultas SET Status = 'atendido' WHERE id = :id");
        $update->bindParam(":id", $id);
        $update->execute();

        $_SESSION['mensagem'] = "Atendimento salvo com sucesso!";

        header("Location: fila-atendimentos.php");
        die();
    } else {
        $_SESSION['mensagem'] = "Falha ao salvar o atendimento.";
        header("Location: fila-atendimentos.php?id=$id");
        die();
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Fila de Atendimentos</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="consulta.css">

    <script src="script.js"></script>

</head>

<body>

    <?php
    if (isset($_GET['id'])) {

        $result = $conn->prepare("SELECT c.id, c.MotivoConsulta, c.DataHora, fp.id as paciente, fp.NomePaciente, fp.cpf, fp.DataNascimento FROM consultas c, fichapaciente fp WHERE c.id = :id AND c.FichaPaciente_id = fp.id AND c.status = 'confirmado'");
        $result->bindParam(":id", $_GET['id']);
        $result->execute();
        $row = $result->fetch(PDO::FETCH_ASSOC);

        $result = $conn->prepare("SELECT fa.*, c.DataHora FROM consultas c, fichapaciente fp, fichaatendimento fa WHERE c.id = :id AND fa.FichaPaciente_id = c.FichaPaciente_id AND c.FichaPaciente_id = fp.id AND c.status = 'confirmado' ORDER BY id DESC");
        $result->bindParam(":id", $_GET['id']);
        $result->execute();
        $atendimentos = $result->fetchAll(PDO::FETCH_ASSOC);

        if ($row) {
            ?>
            <!-- Modal -->
            <div class="modal fade" id="atendimentoPaciente" data-bs-backdrop="static" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title fs-5" id="exampleModalLabel">ATENDIMENTO AO PACIENTE</h3>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="fila-atendimentos.php" method="POST">
                                <h6>Consulta -
                                    <?php echo date("d/m/Y H:i", strtotime($row['DataHora'])); ?>
                                </h6>

                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="hidden" name="paciente" value="<?php echo $row['paciente']; ?>">

                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" disabled id="floatingInput" placeholder=" "
                                        value="<?php echo $row['NomePaciente']; ?>">
                                    <label for="floatingInput">Paciente</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <textarea class="form-control" readonly placeholder=" " id="motivo" name="motivo"
                                        style="height: 70px"><?php echo $row['MotivoConsulta']; ?></textarea>
                                    <label for="floatingTextarea2">Motivo da Consulta</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder=" " id="diagnostico" name="diagnostico"
                                        style="height: 70px"></textarea>
                                    <label for="floatingTextarea2">Diagnóstico o Atendimento</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder=" " id="receita" name="receita"
                                        style="height: 70px"></textarea>
                                    <label for="floatingTextarea2">Descreva a Receita</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder=" " id="descricao" name="descricao"
                                        style="height: 100px" required></textarea>
                                    <label for="floatingTextarea2">Descreva o Atendimento</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder=" " id="retorno" name="retorno"
                                        style="height: 70px"></textarea>
                                    <label for="floatingTextarea2">Retorno</label>
                                </div>

                                <button type="submit" class="btn btn-success">Finalizar Atendimento</button>
                            </form>

                            <hr>

                            <h5 class="mb-3">Histórico de Atendimentos</h5>

                            <?php foreach ($atendimentos as $a) { ?>

                                <hr>
                                <h6>Consulta -
                                    <?php echo date("d/m/Y H:i", strtotime($row['DataHora'])); ?>
                                </h6>
                                <div class="form-floating mb-1">
                                    <textarea class="form-control" readonly disabled placeholder=" " id="floatingTextarea2"
                                        style="height: 70px"><?php echo $a['MotivoConsulta']; ?></textarea>
                                    <label for="floatingTextarea2">Motivo da Consulta</label>
                                </div>

                                <div class="form-floating mb-1">
                                    <textarea class="form-control" readonly disabled placeholder=" " id="floatingTextarea2"
                                        style="height: 70px"><?php echo $a['Diagnostico']; ?></textarea>
                                    <label for="floatingTextarea2">Diagnóstico</label>
                                </div>

                                <div class="form-floating mb-1">
                                    <textarea class="form-control" readonly disabled placeholder=" " id="floatingTextarea2"
                                        style="height: 70px"><?php echo $a['ReceitaRemedios']; ?></textarea>
                                    <label for="floatingTextarea2">Receita</label>
                                </div>

                                <div class="form-floating mb-1">
                                    <textarea class="form-control" readonly disabled placeholder=" " id="floatingTextarea2"
                                        style="height: 100px"><?php echo $a['Diagnostico']; ?></textarea>
                                    <label for="floatingTextarea2">Detalhes do Atendimento</label>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                $(document).ready(function () {
                    $("#atendimentoPaciente").modal('show');
                });
            </script>
        <?php }
    } ?>

    <?php

    if (isset($_SESSION['mensagem'])) {
        session_destroy();
    ?>

        <div class="modal fade" id="mensagem" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title fs-5" id="exampleModalLabel">MENSAGEM</h3>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>
                            <?php echo $_SESSION['mensagem']; ?>
                        </p>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">
                            Ok
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $("#mensagem").modal('show');
            });
        </script>
    <?php } ?>

    <div class="secao-primary">
        <div class="d-flex flex-nowrap">
            <div class="menu bg-white col-auto p-2">
                <div class="bg-white">
                    <a class="d-flex text-decoration-none align-items-center text-dark justify-content-center" href="">
                        <span class="fs-5 d-none d-sm-inline">SÁUDE SEMPRE</h2>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mt-4">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-dark">
                                <span class="fs-6 d-none d-sm-inline">PÁGINA INICIAL</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="consulta.php" class="nav-link text-dark">
                                <span class="fs-6 d-none d-sm-inline">CONSULTAS</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pacientes.php" class="nav-link text-dark">
                                <span class="fs-6 d-none d-sm-inline">PACIENTES</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="fila-atendimentos.php" class="nav-link text-dark">
                                <span class="fs-6 d-none d-sm-inline">FILA DE ATENDIMENTOS</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="back">
                <div class="secao-secondary p-3">

                    <table class="table table-striped">
                        <thead>
                            <tr class="bg-primary">
                                <th class="texto text-white" scope="col">ID</th>
                                <th class="texto text-white" scope="col">Paciente</th>
                                <th class="texto text-white" scope="col">CPF</th>
                                <th class="texto text-white" scope="col">Data de Nascimento</th>
                                <th class="texto text-white" scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $result = $conn->prepare("SELECT c.id, c.MotivoConsulta, c.DataHora, fp.NomePaciente, fp.cpf, fp.DataNascimento FROM consultas c, fichapaciente fp WHERE c.FichaPaciente_id = fp.id AND c.status = 'confirmado'");
                            $result->execute();
                            $rows = $result->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($rows as $o) { ?>
                                <tr>
                                    <td class="bg-white">
                                        <?php echo $o['id']; ?>
                                    </td>
                                    <td class="bg-white">
                                        <?php echo $o['NomePaciente']; ?>
                                    </td>
                                    <td class="bg-white">
                                        <?php echo $o['cpf']; ?>
                                    </td>
                                    <td class="bg-white">
                                        <?php echo date("d/m/Y", strtotime($o['DataNascimento'])); ?>
                                    </td>
                                    <td class="bg-white">
                                        <a class="btn btn-warning" href="?id=<?php echo $o['id']; ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                <path
                                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                            </svg>
                                        </a>
                                    </td>

                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="js/fila-atendimento.js"></script>
</body>

</html>