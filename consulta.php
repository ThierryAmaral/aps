<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="consulta.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <title>Consultas</title>

</head>

<body>
    <div class="secao-primary">
        <div class="row flex-nowrap">
            <div class="bg-white col-auto p-2">
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
                            <a href="#" class="nav-link text-dark">
                                <span class="fs-6 d-none d-sm-inline">FILA DE ATENDIMENTOS</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="back d-flex flex-column">
                <div class="secao-secondary p-3">

                    <!-- Button trigger modal -->
                    <button type="button" class="p-2 btn btn-success mb-3" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        NOVA CONSULTA
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Consultas</h3>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close">X</button>
                                </div>
                                <div class="modal-body row g-2">
                                    <div class="form-floating mb-3 col-md-12">
                                        <select class="qtd_select form-select"
                                            aria-label="Floating label select example">
                                            <option selected value="">SELECIONE O USUÁRIO</option>
                                        </select>
                                        <label for="floatingSelect">SELECIONE O USUÁRIO</label>
                                    </div>
                                    <div class="form-floating mb-3 col-md-5">
                                        <input type="date" class="form-control"
                                            placeholder=" ">
                                        <label for="floatingInput">SELECIONE A DATA</label>
                                    </div>
                                    <div class="form-floating mb-3 col-md-7">
                                        <select class="qtd_select form-select"
                                            aria-label="Floating label select example">
                                            <option selected value="">TIPO DE CONSULTA</option>
                                        </select>
                                        <label for="floatingSelect">TIPO DE CONSULTA</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="negrito">FILTROS</div>
                    <div class="row g-3 mb-3">

                        <div class="col-md-2">
                            <input type="date" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <input type="text" class="form-control" id="floatingInput" placeholder="NOME DO PACIENTE">
                        </div>

                        <button type="submit" class="btn btn-info mb-2 col-md-1 text-white">FILTRAR</button>

                    </div>

                    <table class="table table-striped border">
                        <thead>
                            <tr class="bg-info">
                                <th class="text-white" scope="col">Paciente</th>
                                <th class="text-white" scope="col">Telefone</th>
                                <th class="text-white" scope="col">Data e Hora</th>
                                <th class="text-white" scope="col">Forma de Pagamento</th>
                                <th class="text-white" scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="bg-white" scope="row">1</th>
                                <td class="bg-white">Mark</td>
                                <td class="bg-white">Otto</td>
                                <td class="bg-white">@mdo</td>
                                <td class="bg-white">@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th class="bg-white" scope="row">3</th>
                                <td class="bg-white">Larry</td>
                                <td class="bg-white">the Bird</td>
                                <td class="bg-white">@twitter</td>
                                <td class="bg-white">@mdo</td>
                            </tr>
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