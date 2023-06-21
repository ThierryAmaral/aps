<?php
include_once("includes/connection.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Pacientes</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="pacientes.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="consulta.css">

    <script src="script.js"></script>

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

                    <!-- Button Cadastro -->
                    <button type="button" class="p-2 btn btn-success mb-3 text-white" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        NOVO PACIENTE
                    </button>

                    <!-- Modal Cadastro -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Paciente</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="envio.php" method="post">
                                        <div class="form-floating mb-3 input-area">
                                            <input type="text" name="Nome" class="form-control" id="vNome"
                                                placeholder=" " minlength="3" maxlength="100">
                                            <label for="vNome" class="form-label">Nome Completo</label>
                                        </div>
                                        <div class="row g-2">
                                            <div class="form-floating mb-3 col-md-6 input-area">
                                                <input type="date" name="Data" class="form-control" id="vData"
                                                    placeholder=" " minlength="3" maxlength="100">
                                                <label for="vData">Data de Nascimento</label>
                                            </div>
                                            <div class="form-floating mb-3 col-md-6 input-area">
                                                <input type="text" name="CPF" class="form-control" id="vCPF"
                                                    placeholder=" " minlength="11" maxlength="11">
                                                <label for="vCPF">CPF</label>
                                            </div>
                                        </div>
                                        <div class="row g-2" id="innerContatos">
                                            <div class="form-floating mb-3 col-md-8 input-area">
                                                <input type="email" name="Email" class="form-control" id="vEmail"
                                                    placeholder=" " minlength="10" maxlength="45">
                                                <label for="vEmail">Email</label>
                                            </div>
                                            <div class="form-floating mb-3 col-md-4 input-area">
                                                <input type="text" name="Contato" class="form-control" id="vContato"
                                                    minlength="8" maxlength="11" placeholder=" ">
                                                <label for="vContato">Contato</label>
                                            </div>
                                        </div>
                                        <div class="row g-1 text-center input-area">
                                            <div class="form-floating mb-3 col-md-2 input-area">
                                                <input type="text" name="CEP" class="form-control" id="vCEP"
                                                    placeholder=" " minlength="8" maxlength="8">
                                                <label for="vCEP">Cep</label>
                                            </div>
                                            <div class="form-floating mb-3 col-md-3">
                                                <input type="text" name="Bairro" class="form-control" id="vBairro"
                                                    placeholder=" " minlength="3" maxlength="30">
                                                <label for="vBairro">Bairro</label>
                                            </div>
                                            <div class="form-floating mb-3 col-md-5 input-area">
                                                <input type="text" name="Rua" class="form-control" id="vRua"
                                                    minlength="3" placeholder=" " maxlength="100">
                                                <label for="vRua">Rua</label>
                                            </div>
                                            <div class="form-floating mb-3 col-md-2">
                                                <input type="text" name="Numero" class="form-control" id="vNumero"
                                                    placeholder=" " maxlength="10">
                                                <label for="vNumero">Número</label>
                                            </div>
                                        </div>
                                        <div class="row g-2 text-center">
                                            <div class="form-floating mb-3 col-md-6">
                                                <input type="text" name="Complemento" class="form-control"
                                                    id="vComplemento" placeholder=" " maxlength="100">
                                                <label for="vComplemento">Complemento</label>
                                            </div>
                                            <div class="form-floating mb-3 col-md-4 input-area">
                                                <input type="text" name="Municipio" class="form-control" id="vMunicipio"
                                                    minlength="3" placeholder=" " maxlength="30">
                                                <label for="vMunicipio">Município</label>
                                            </div>
                                            <div class="form-floating mb-3 col-md-2 input-area">
                                                <input type="text" name="UF" class="form-control" id="vUF"
                                                    placeholder=" " minlength="2" maxlength="2">
                                                <label for="vUF">UF</label>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Fechar</button>
                                            <input type="button" class="btn btn-primary" value="Cadastrar"
                                                onclick="FinalizarPedido(this.form)">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <form action="" method="post">
                        <div class="row g-2 mb-3">
                            
                            <div class="form-floating mb-2 col-md-6">
                                <input type="text" class="form-control" name="busca" placeholder=" " value="">
                                <label for="floatingInput">Nome do Paciente</label>
                            </div>
                            <button type="submit" class="btn btn-info mb-2 col-md-1 text-white">FILTRAR</button>

                        </div>
                    </form>

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
                            if(isset($_POST['busca'])){
                                $busca = $_POST['busca'];
                            }else{
                                $busca = '';
                            }
                                
                            
                            $result = $conn->prepare("SELECT * FROM fichapaciente WHERE NomePaciente like '%$busca%'");
                            $result->execute();
                            $rows = $result->fetchAll(PDO::FETCH_ASSOC);
                            foreach ($rows as $o) { ?>
                                <tr>
                                    <td class="bg-white">
                                        <?php echo $id = $o['id']; ?>
                                    </td>
                                    <td class="bg-white">
                                        <?php echo $o['NomePaciente']; ?>
                                    </td>
                                    <td class="bg-white">
                                        <?php echo $o['CPF']; ?>
                                    </td>
                                    <td class="bg-white">
                                        <?php echo date("d/m/Y", strtotime($o['DataNascimento'])); ?>
                                    </td>
                                    <td class="bg-white">
                                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                            <button type="button" class="p-2 btn btn-warning mb-2 view_data"
                                                data-bs-toggle="modal" data-bs-target="#edicao<?php echo $id; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                    <path
                                                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                                </svg>
                                            </button>
                                            <button type="button" class="p-2 btn btn-danger mb-2" data-bs-toggle="modal"
                                                data-bs-target="#exclusao<?php echo $id; ?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Modal Exclusao-->
                                <div class="modal fade" id="exclusao<?php echo $id; ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                    <?php echo $o['NomePaciente']; ?>
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="excluir.php" method="post">
                                                    <input type="hidden" name="id" id="vId" value="<?php echo $o['id']; ?>">
                                                    Tem certeza que deseja excluir a ficha do paciente?
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Não</button>
                                                        <button type="submit" class="btn btn-danger">Sim</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Edição -->
                                <div class="modal fade" id="edicao<?php echo $id; ?>" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                    <?php echo $o['NomePaciente']; ?>
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="editar.php" method="post">
                                                    <input type="hidden" name="id" id="vId" value="<?php echo $o['id']; ?>">
                                                    <div class="form-floating mb-3 input-area">
                                                        <input type="text" name="Nome" class="form-control" id="vNome"
                                                            placeholder=" " minlength="3" maxlength="100"
                                                            value="<?php echo $o['NomePaciente']; ?>">
                                                        <label for="vNome" class="form-label">Nome Completo</label>
                                                    </div>
                                                    <div class="row g-2">
                                                        <div class="form-floating mb-3 col-md-6 input-area">
                                                            <input type="date" name="Data" class="form-control" id="vData"
                                                                placeholder=" " minlength="3" maxlength="100"
                                                                value="<?php echo $o['DataNascimento']; ?>">
                                                            <label for="vData">Data de Nascimento</label>
                                                        </div>
                                                        <div class="form-floating mb-3 col-md-6 input-area">
                                                            <input type="text" name="CPF" class="form-control" id="vCPF"
                                                                placeholder=" " minlength="11" maxlength="11"
                                                                value="<?php echo $o['CPF']; ?>">
                                                            <label for="vCPF">CPF</label>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2" id="innerContatos">
                                                        <div class="form-floating mb-3 col-md-8 input-area">
                                                            <input type="email" name="Email" class="form-control"
                                                                id="vEmail" placeholder=" " minlength="10" maxlength="45"
                                                                value="<?php echo $o['Email']; ?>">
                                                            <label for="vEmail">Email</label>
                                                        </div>
                                                        <div class="form-floating mb-3 col-md-4 input-area">
                                                            <input type="text" name="Contato" class="form-control"
                                                                id="vContato" minlength="8" maxlength="11" placeholder=" "
                                                                value="<?php echo $o['Contato']; ?>">
                                                            <label for="vContato">Contato</label>
                                                        </div>
                                                    </div>
                                                    <div class="row g-1 text-center input-area">
                                                        <div class="form-floating mb-3 col-md-2 input-area">
                                                            <input type="text" name="CEP" class="form-control" id="vCEP"
                                                                placeholder=" " minlength="8" maxlength="8"
                                                                value="<?php echo $o['CEP']; ?>">
                                                            <label for="vCEP">Cep</label>
                                                        </div>
                                                        <div class="form-floating mb-3 col-md-3">
                                                            <input type="text" name="Bairro" class="form-control"
                                                                id="vBairro" placeholder=" " minlength="3" maxlength="30"
                                                                value="<?php echo $o['Bairro']; ?>">
                                                            <label for="vBairro">Bairro</label>
                                                        </div>
                                                        <div class="form-floating mb-3 col-md-5 input-area">
                                                            <input type="text" name="Rua" class="form-control" id="vRua"
                                                                minlength="3" placeholder=" " maxlength="100"
                                                                value="<?php echo $o['Endereco']; ?>">
                                                            <label for="vRua">Rua</label>
                                                        </div>
                                                        <div class="form-floating mb-3 col-md-2">
                                                            <input type="text" name="Numero" class="form-control"
                                                                id="vNumero" placeholder=" " maxlength="10"
                                                                value="<?php echo $o['Numero']; ?>">
                                                            <label for="vNumero">Número</label>
                                                        </div>
                                                    </div>
                                                    <div class="row g-2 text-center">
                                                        <div class="form-floating mb-3 col-md-6">
                                                            <input type="text" name="Complemento" class="form-control"
                                                                id="vComplemento" placeholder=" " maxlength="100"
                                                                value="<?php echo $o['Complemento']; ?>">
                                                            <label for="vComplemento">Complemento</label>
                                                        </div>
                                                        <div class="form-floating mb-3 col-md-4 input-area">
                                                            <input type="text" name="Municipio" class="form-control"
                                                                id="vMunicipio" minlength="3" placeholder=" " maxlength="30"
                                                                value="<?php echo $o['Municipio']; ?>">
                                                            <label for="vMunicipio">Município</label>
                                                        </div>
                                                        <div class="form-floating mb-3 col-md-2 input-area">
                                                            <input type="text" name="UF" class="form-control" id="vUF"
                                                                placeholder=" " minlength="2" maxlength="2"
                                                                value="<?php echo $o['UF']; ?>">
                                                            <label for="vUF">UF</label>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Fechar</button>
                                                        <button type="submit" class="btn btn-warning">Editar</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="pacientes.js"></script>
</body>

</html>