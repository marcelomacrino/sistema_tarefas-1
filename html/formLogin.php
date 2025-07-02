<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Sistema de Tarefas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow p-4" style="min-width: 350px;">
            <h3 class="mb-4 text-center">Login</h3>
            <?php if (isset($_GET['erro'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?php
                        if ($_GET['erro'] == '1') {
                            echo 'Email ou senha inválidos.';
                        } elseif ($_GET['erro'] == '2') {
                            echo 'Login necessário para acessar o sistema.';
                        } else {
                            echo 'Erro desconhecido.';
                        }
                    ?>
                </div>
            <?php elseif (isset($_GET['sucesso']) && $_GET['sucesso'] == '1'): ?>
                <div class="alert alert-success" role="alert">
                    Login realizado com sucesso!
                </div>
            <?php endif; ?>
            <form action="./php/back/logar.php" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>
        </div>
    </div>
    <!-- Bootstrap JS CDN (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>