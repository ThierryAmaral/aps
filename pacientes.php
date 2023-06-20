<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="pacientes.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Pacientes</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>

</head>

<body>
    <div class="first-section">
        <div class="row flex-nowrap">
            <div class="bg-white col-auto">
                <div class="bg-white">
                    <a class="d-flex text-decoration-none align-items-center text-dark justify-content-center" href="">
                        <span class="fs-4 d-none d-sm-inline">SÁUDE SEMPRE</h2>
                    </a>
                    <hr>
                    <ul class="nav nav-pills flex-column mt-4">
                        <li class="nav-item">
                            <a href="#" class="nav-link text-dark">
                                PÁGINA INICIAL
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="consulta.php" class="nav-link text-dark">
                                <span class="fs-4 d-none d-sm-inline">CONSULTAS</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pacientes.php" class="nav-link text-dark">
                                <span class="fs-4 d-none d-sm-inline">PACIENTES</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-dark">
                                <span class="fs-4 d-none d-sm-inline">FILA DE ATENDIMENTOS</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="back d-flex flex-column w-100">
                <div class="second-section">
                    <!-- Modal Exclusao-->
                    <div class="modal fade" id="exclusao" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Excluir Paciente</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Tem certeza que deseja excluír a ficha do paciente?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Não</button>
                                    <button type="button" class="btn btn-danger">Sim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Button Cadastro -->
                    <button type="button" class="p-2 btn btn-success mb-3" data-bs-toggle="modal"
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
                                            <label for="vNome" class="form-label">Nome Completo</label>
                                            <input type="text" name="Nome" class="form-control" id="vNome"
                                                placeholder="Paciente da Silva" minlength="3" maxlength="100">
                                        </div>
                                        <div class="row g-2">
                                            <div class="form-floating mb-3 col-md-6 input-area">
                                                <label for="vData">Data de Nascimento</label>
                                                <input type="date" name="Data" class="form-control" id="vData"
                                                    placeholder=" " minlength="3" maxlength="100">
                                            </div>
                                            <div class="form-floating mb-3 col-md-6 input-area">
                                                <label for="vCPF">CPF</label>
                                                <input type="text" name="CPF" class="form-control" id="vCPF"
                                                    placeholder="000.000.000-00" minlength="18" maxlength="18">
                                            </div>
                                        </div>
                                        <div class="row g-2" id="innerContatos">
                                            <div class="form-floating mb-3 col-md-8 input-area">
                                                <label for="vEmail">Email</label>
                                                <input type="email" name="Email" class="form-control" id="vEmail"
                                                    placeholder="paciente@gmail.com" minlength="10" maxlength="45">

                                            </div>
                                            <div class="form-floating mb-3 col-md-4 input-area">
                                                <label for="vContato">Contato</label>
                                                <input type="text" name="Contato" class="form-control" id="vContato"
                                                    minlength="14" maxlength="15" placeholder="(21) 90000-0000">
                                            </div>
                                        </div>
                                        <div class="row g-1 text-center input-area">
                                            <div class="form-floating mb-3 col-md-2 input-area">
                                                <label for="vCEP">Cep</label>
                                                <input type="text" name="CEP" class="form-control" id="vCEP"
                                                    placeholder="00000-000" minlength="9" maxlength="9">
                                            </div>
                                            <div class="form-floating mb-3 col-md-3">
                                                <label for="vBairro">Bairro</label>
                                                <input type="text" name="Bairro" class="form-control" id="vBairro"
                                                    placeholder="Bairro do Paciente" minlength="3" maxlength="30">
                                            </div>
                                            <div class="form-floating mb-3 col-md-5 input-area">
                                                <label for="vRua">Rua</label>
                                                <input type="text" name="Rua" class="form-control" id="vRua"
                                                    minlength="3" placeholder="Rua do Paciente" maxlength="100">
                                            </div>
                                            <div class="form-floating mb-3 col-md-2">
                                                <label for="vNumero">Número</label>
                                                <input type="text" name="Numero" class="form-control" id="vNumero"
                                                    placeholder="0000000" maxlength="10">
                                            </div>
                                        </div>
                                        <div class="row g-2 text-center">
                                            <div class="form-floating mb-3 col-md-6">
                                                <label for="vComplemento">Complemento</label>
                                                <input type="text" name="Complemento" class="form-control"
                                                    id="vComplemento" placeholder="Casa 0, Ap. 0" maxlength="100">
                                            </div>
                                            <div class="form-floating mb-3 col-md-4 input-area">
                                                <label for="vMunicipio">Município</label>
                                                <input type="text" name="Municipio" class="form-control" id="vMunicipio"
                                                    minlength="3" placeholder="Rio de Janeiro" maxlength="30">
                                            </div>
                                            <div class="form-floating mb-3 col-md-2 input-area">
                                                <label for="vUF">UF</label>
                                                <input type="text" name="UF" class="form-control" id="vUF"
                                                    placeholder="RJ" minlength="2" maxlength="2">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Fechar</button>
                                            <input type="button" class="btn btn-primary" value="Enviar"
                                                onclick="FinalizarPedido(this.form)">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="font-weight-bold">
                        FILTRAR PACIENTE
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="form-group mb-2 col-md-3">
                            <input type="text" class="form-control" placeholder="INSIRA O NOME">
                        </div>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr class="bg-info">
                                <th scope="col">Paciente</th>
                                <th scope="col">CPF</th>
                                <th scope="col">Data de Nascimento</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $conexao = mysqli_connect('127.0.0.1', 'root', '', 'saudesempre');
                            $result_nomes = "SELECT * FROM fichapaciente";
                            $resultado_nomes = mysqli_query($conexao, $result_nomes);
                            if ($resultado_nomes) {
                                $conta = mysqli_num_rows($resultado_nomes);
                                while ($rows_nomes = mysqli_fetch_array($resultado_nomes)) { ?>
                                    <tr>
                                        <td>
                                            <?php echo $rows_nomes["NomePaciente"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $rows_nomes["CPF"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $rows_nomes["DataNascimento"]; ?>
                                        </td>
                                        <td>
                                            <button type="button" class="p-2 btn btn-warning mb-3" data-bs-toggle="modal"
                                                data-bs-target="#edicao">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                    <path
                                                        d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                                </svg>
                                            </button>
                                            <button type="button" class="p-2 btn btn-danger mb-3" data-bs-toggle="modal"
                                                data-bs-target="#exclusao">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>