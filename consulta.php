<?php
include_once("includes/connection.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="consulta.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Consultas</title>

</head>

<body>
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

                    <!-- Button trigger modal -->
                    <button type="button" class="p-2 btn btn-info mb-3 text-white" data-bs-toggle="modal"
                        data-bs-target="#novaConsulta">
                        NOVA CONSULTA
                    </button>

                    <!-- Modal -->
                    <form action="envio-consultas.php" method="POST">
                    <div class="modal fade" id="novaConsulta" tabindex="-1" data-bs-backdrop="static"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Consultas</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                
                                    <div class="modal-body row g-2">
                                        <div class="form-floating mb-3 col-md-12">
                                            <select class="qtd_select form-select"
                                                aria-label="Floating label select example" name="usuario_consulta">
                                                <?php

                                                $result = $conn->prepare("SELECT * FROM fichapaciente");
                                                $result->execute();
                                                $rows = $result->fetchAll(PDO::FETCH_ASSOC);
                                                foreach ($rows as $o) { ?>
                                                    <option selected value="<?php echo $o['id']; ?>">
                                                        <?php echo $o['NomePaciente']; ?>
                                                    </option>
                                                <?php } ?>

                                            </select>
                                            <label for="floatingSelect">Selecione o Usuário</label>
                                        </div>
                                        <div class="form-floating mb-3 col-md-5">
                                            <input type="date" class="form-control" placeholder=" " name="data_consulta"
                                                id="dataConsulta">
                                            <label for="floatingInput">Selecione a Data</label>
                                        </div>
                                        <div class="form-floating mb-3 col-md-7">
                                            <select class="qtd_select form-select"
                                                aria-label="Floating label select example" name="tipo_consulta">
                                                <option selected value="Plano">Plano de Saúde</option>
                                                <option selected value="Particular">Particular</option>
                                            </select>
                                            <label for="floatingSelect">Tipo de Consulta</label>
                                        </div>

                                        <div class="d-flex flex-wrap mb-3 options-data">
                                            <div class="alert alert-warning w-100">
                                                <span><b>Selecione uma data</b> para visualizar os horários
                                                    disponiveis</span>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea class="form-control" cols="60" placeholder=" " maxlength="200"
                                                name="motivo_consulta" style="height: 100px"></textarea>
                                            <label for="resumo">Motivo da Consulta</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                    </form>                             

                    <div class="negrito">FILTROS</div>
                    <div class="row g-2 mb-3">

                        <div class="form-floating mb-2 col-md-2">
                            <input type="date" class="form-control" placeholder=" ">
                            <label for="floatingInput">Data</label>
                        </div>

                        <div class="form-floating mb-2 col-md-6">
                            <input type="text" class="form-control" placeholder=" ">
                            <label for="floatingInput">Nome do Paciente</label>
                        </div>

                        <button type="submit" class="btn btn-info mb-2 col-md-1 text-white">FILTRAR</button>

                    </div>

                    <table class="table table-striped border">
                        <thead>
                            <tr class="bg-info">
                                <th class="texto text-white" scope="col">ID</th>
                                <th class="texto text-white" scope="col">Paciente</th>
                                <th class="texto text-white" scope="col">Data e Hora</th>
                                <th class="texto text-white" scope="col">Motivo</th>
                                <th class="texto text-white" scope="col">Forma de Pagamento</th>
                                <th class="texto text-white" scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $result = $conn->prepare("select c.*, p.NomePaciente from consultas c, fichapaciente p where c.FichaPaciente_id = p.id and c.Status != 'atendido'");
                            $result->execute();
                            $rows = $result->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($rows as $o) { ?>
                                <tr>
                                    <td class="bg-white">
                                        <?php echo $id = $o['id']; ?>
                                    </td>
                                    <td class="bg-white">
                                        <?php echo $id = $o['NomePaciente']; ?>
                                    </td>
                                    <td class="bg-white">
                                        <?php echo $o['DataHora']; ?>
                                    </td>
                                    <td class="bg-white">
                                        <?php echo $o['MotivoConsulta']; ?>
                                    </td>
                                    <td class="bg-white">
                                        <?php echo $o['FormaPagamento']; ?>
                                    </td>
                                    <td class="bg-white">
                                        <div class="dropdown">
                                            <?php if ($o['Status'] == 'confirmado') { ?>
                                                <button class="p-2 btn btn-success mb-2" type="submit" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                                    </svg>
                                                </button>
                                            <?php }
                                            if ($o['Status'] == 'aguardando') { ?>
                                                <button class="p-2 btn btn-warning mb-2" type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                                                        <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z" />
                                                        <path
                                                            d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z" />
                                                    </svg>
                                                </button>
                                            <?php }
                                            if ($o['Status'] == 'cancelado') { ?>
                                                <button class="p-2 btn btn-danger mb-2" type="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                        <path
                                                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                                    </svg>
                                                </button>
                                            <?php } ?>
                                            <ul class="dropdown-menu">
                                                <?php if ($o['Status'] != 'atendido') { ?>
                                                    <li><a class="dropdown-item"
                                                            href="status.php?id=<?php echo $o['id']; ?>&status=atendido">Atendido</a>
                                                    </li>
                                                <?php }
                                                if ($o['Status'] != 'confirmado') { ?>
                                                    <li><a class="dropdown-item"
                                                            href="status.php?id=<?php echo $o['id']; ?>&status=confirmado">Confirmado</a>
                                                    </li>
                                                <?php }
                                                if ($o['Status'] != 'aguardando') { ?>
                                                    <li><a class="dropdown-item"
                                                            href="status.php?id=<?php echo $o['id']; ?>&status=aguardando">Aguardando</a>
                                                    </li>
                                                <?php }
                                                if ($o['Status'] != 'cancelado') { ?>
                                                    <li><a class="dropdown-item"
                                                            href="status.php?id=<?php echo $o['id']; ?>&status=cancelado">Cancelado</a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
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
    <script src="consulta.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery-3.7.0.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>