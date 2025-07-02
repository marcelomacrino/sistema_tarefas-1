<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo ao Sistema de Tarefas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h1 class="display-5">Bem-vindo ao Sistema de Tarefas</h1>
            <p class="lead">Veja as três últimas tarefas aprovadas no sistema!</p>
        </div>
        <div class="row justify-content-center">
            <?php
            // Conexão com o banco de dados (ajuste conforme necessário)
            $conn = new mysqli("localhost", "root", "", "sistema_tarefas");
            if ($conn->connect_error) {
                echo '<div class="alert alert-danger">Erro ao conectar ao banco de dados.</div>';
                exit;
            }

            // Consulta para buscar as 3 últimas tarefas aprovadas
            $sql = "SELECT titulo, descricao, imagem FROM tarefas WHERE status='aprovada' ORDER BY id DESC LIMIT 3";
            $result = $conn->query($sql);

            if ($result && $result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // Se não houver imagem, usa uma imagem padrão
                    $img = !empty($row['imagem']) ? $row['imagem'] : 'https://via.placeholder.com/400x200?text=Tarefa';
                    echo '
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="' . htmlspecialchars($img) . '" class="card-img-top" alt="Imagem da tarefa">
                            <div class="card-body">
                                <h5 class="card-title">'.htmlspecialchars($row['titulo']).'</h5>
                                <p class="card-text">'.htmlspecialchars($row['descricao']).'</p>
                            </div>
                        </div>
                    </div>
                    ';
                }
            } else {
                echo '<div class="col-12"><div class="alert alert-info text-center">Nenhuma tarefa aprovada encontrada.</div></div>';
            }
            $conn->close();
            ?>
        </div>
    </div>
    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>