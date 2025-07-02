<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexhtml - Sistema Tarefas</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { min-height: 100vh; }
        #conteudo { min-height: 70vh; }
    </style>
</head>
<body>
    <!-- Menu de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4 sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="html/home.php" onclick="carregarPagina('html/home.php');return false;">Sistema de Tarefas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="html/home.php" onclick="carregarPagina('html/home.php');return false;">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="html/nova_tarefa.php" onclick="carregarPagina('html/nova_tarefa.php');return false;">Nova Tarefa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="html/minhas_tarefas.php" onclick="carregarPagina('html/minhas_tarefas.php');return false;">Minhas Tarefas</a>
                    </li>
                </ul>
                <form class="d-flex ms-3">
                    <a href="html/formLogin.php" class="btn btn-outline-light" onclick="carregarPagina('html/formLogin.php');return false;">Login</a>
                </form>
            </div>
        </div>
    </nav>

    <!-- Conteúdo dinâmico -->
    <div class="container" id="conteudo">
        <!-- Conteúdo inicial pode ser carregado aqui -->
        <h2 class="mb-4">Bem-vindo ao Sistema de Tarefas</h2>
        <p>Selecione uma opção no menu para começar.</p>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function carregarPagina(pagina) {
        fetch(pagina)
            .then(response => {
                if (!response.ok) throw new Error('Erro ao carregar');
                return response.text();
            })
            .then(html => {
                document.getElementById('conteudo').innerHTML = html;
            })
            .catch(() => {
                document.getElementById('conteudo').innerHTML = '<div class="alert alert-danger">Erro ao carregar a página.</div>';
            });
    }
    // Carregar home.php ao iniciar
    document.addEventListener('DOMContentLoaded', function() {
        carregarPagina('html/home.php');
    });
    </script>
</body>
</html>
