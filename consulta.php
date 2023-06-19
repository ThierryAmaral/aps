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
                    <input type="button" onclick="abrirJanela()" class="p-2 btn btn-success mb-3" value="NOVA CONSULTA">

                    <div id="popup_consulta" class="popup">
                        <div class="subpopup">
                            <button class="fechar" onclick="fecharJanela()">X</button>
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