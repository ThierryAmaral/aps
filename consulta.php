<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="consulta.css">

    <title>Consultas</title>

</head>

<body>
    <div class="secao-primary">
        <div class="d-flex flex-nowrap">
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
            <div class="back">
                <div class="secao-secondary p-3">

                    <!-- Button trigger modal -->
                    <button type="button" class="p-2 btn btn-info mb-3 text-white" data-bs-toggle="modal"
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
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body row g-2">
                                    <div class="form-floating mb-3 col-md-12">
                                        <select class="qtd_select form-select"
                                            aria-label="Floating label select example">
                                            <option selected value="">Selecione o Usuário</option>
                                        </select>
                                        <label for="floatingSelect">Selecione o Usuário</label>
                                    </div>
                                    <div class="form-floating mb-3 col-md-5">
                                        <input type="date" class="form-control" placeholder=" ">
                                        <label for="floatingInput">Selecione a Data</label>
                                    </div>
                                    <div class="form-floating mb-3 col-md-7">
                                        <select class="qtd_select form-select"
                                            aria-label="Floating label select example">
                                            <option selected value="">Tipo de Consulta</option>
                                        </select>
                                        <label for="floatingSelect">Tipo de Consulta</label>
                                    </div>
                                    <div class="d-flex flex-wrap mb-3 padd">
                                        <div class="text-center">
                                            <button class="border btn btn-light" type="button" id="teste"
                                                onclick="chamarData()">09:00 -
                                                09:30</button>
                                        </div>
                                        <div class="text-center">
                                            <button class="border btn btn-light" type="button" id="teste2"
                                                onclick="chamarData2()">09:45 -
                                                10:15</button>
                                        </div>
                                        <div class="text-center">
                                            <button class="border btn btn-light" type="button" id="teste3"
                                                onclick="chamarData3()">10:30 - 11:00</button>
                                        </div>
                                        <div class="text-center">
                                            <button class="border btn btn-light" type="button" id="teste4"
                                                onclick="chamarData4()">11:15 - 11:45</button>

                                        </div>
                                        <div class="text-center">
                                            <button class="border btn btn-light" type="button" id="teste5"
                                                onclick="chamarData5()">13:30 - 14:00</button>

                                        </div>
                                        <div class="text-center">
                                            <button class="border btn btn-light" type="button" id="teste6"
                                                onclick="chamarData6()">14:15 - 14:45</button>

                                        </div>
                                        <div class="text-center">
                                            <button class="border btn btn-light" type="button" id="teste7"
                                                onclick="chamarData7()">15:00 - 15:30</button>

                                        </div>
                                        <div class="text-center">
                                            <button class="border btn btn-light" type="button" id="teste8"
                                                onclick="chamarData8()">15:45 - 16:15</button>

                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control" cols="60" placeholder=" " maxlength="200"
                                            style="height: 100px"></textarea>
                                        <label for="resumo">Motivo da Consulta</label>
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
                                <th class="texto text-white" scope="col">PACIENTE</th>
                                <th class="texto text-white" scope="col">TELEFONE</th>
                                <th class="texto text-white" scope="col">DATA E HORA</th>
                                <th class="texto text-white" scope="col">FORMA DE PAGAMENTO</th>
                                <th class="texto text-white" scope="col">STATUS</th>
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