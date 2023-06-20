<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="consulta.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Consulta de Paciênte</title>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
        crossorigin="anonymous"></script>

</head>

<body>
    <div class="secao-primary">
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
                            <a href="#" class="nav-link text-dark">
                                <span class="fs-4 d-none d-sm-inline">CONSULTAS</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link text-dark">
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
                <div class="secao-secondary">

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
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-floating">
                                        <select class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <label for="floatingSelect">Works with selects</label>
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

                    <div class="font-weight-bold">
                        FILTROS
                    </div>
                    <div class="row g-2 mb-5">
                        <div class="form-group mb-2 col-md-3">
                            <input type="date" class="form-control">
                        </div>
                        <div class="form-group mb-2 col-md-6">
                            <input type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">FILTRAR</button>
                    </div>

                    <table class="table table-striped">
                        <thead>
                            <tr class="bg-info">
                                <th scope="col">#</th>
                                <th scope="col">Primeiro</th>
                                <th scope="col">Último</th>
                                <th scope="col">Nickname</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="consulta.js"></script>
</body>

</html>