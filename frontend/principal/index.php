<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,200&display=swap" rel="stylesheet">

    <title>Sistema Tarefas</title>
</head>

<body>
    <div class="container-fluid cor_fundo">
        <div class="row mt-5">
            <div class="col-6">
                <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top fonte-barra">
                    <a class="navbar-brand" href="#">
                        <svg xmlns="../public/img/icons/stack-flow.svg" width="20" height="20" fill="currentColor" class="bi bi-stack-overflow" viewBox="0 0 16 16">
                            <path d="M12.412 14.572V10.29h1.428V16H1v-5.71h1.428v4.282h9.984z" />
                            <path d="M3.857 13.145h7.137v-1.428H3.857v1.428zM10.254 0 9.108.852l4.26 5.727 1.146-.852L10.254 0zm-3.54 3.377 5.484 4.567.913-1.097L7.627 2.28l-.914 1.097zM4.922 6.55l6.47 3.013.603-1.294-6.47-3.013-.603 1.294zm-.925 3.344 6.985 1.469.294-1.398-6.985-1.468-.294 1.397z" />
                        </svg>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../../backend/scripts/comum/usuarios/">Usuários</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../../backend/scripts/comum/tarefas/">Tarefas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../../backend/scripts/adm/usuarios/index_usuario.php">Usuários</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../../backend/scripts/adm/tarefas/index_tarefas.php">Tarefas</a>
                                </li>
                    </div>
                    <div class="col-5">
                        <p class="m-2"><strong>Usuário Logado: </strong><i><u></i></u> </p>
                    </div>
                    <div class="col-1">
                        <form>
                            <a href="../../backend/login/" class="btn btn-primary btn-rounded">Logout</a>
                        </form>
                    </div>
                    <div class="col-1">
                        <form class="position-absolute end-0 me-2" role="search">
                            <a href="../../backend/login/login.php" class="btn btn-primary btn-rounded">Login</a>
                        </form>
                    </div>
            </div>
            </nav>
        </div>
        <div class="row mt-5">
            <div class="col">
                <p class="fs-1 text-center">Sistema Tarefas - Tela Principal</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="border border-3 bg-success mx-auto" style="width:110px;">
                    <svg xmlns="../public/img/icons/list-task.svg" width="100" height="100" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z" />
                        <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z" />
                        <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="card1">
                    <p class="text-center pt-3 fs-4 fw-bolder">
                        <span>
                            Quantidade de Usuários Ativos:
                        </span>
                        <span class="badge bg-warning fs-5 text-center">
                        </span>
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="card2">
                    <p class="text-center pt-3 fs-4 fw-bolder">
                        <span>
                            Quantidade de Tarefas Finalizadas:
                        </span>
                        <span class="badge bg-warning fs-5 text-center">
                        </span>
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="card3">
                    <p class="text-center pt-3 fs-4 fw-bolder">
                        <span>
                            Quantidade de Tarefas Abertas:
                        </span>
                        <span class="badge bg-warning fs-5 text-center">
                        </span>
                    </p>
                </div>
            </div>
        </div>
        <div class="row mt-5 bg-secondary m-2 fixed-bottom" style="z-index: 1;">
            <div class="col text-center">
                Desenvolvido por: Fulano, Fulano e Fulano
            </div>
        </div>
    </div>
    <script src="../public/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>