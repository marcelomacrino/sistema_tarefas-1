<?php
require_once __DIR__ . '/../classes/classConexao.php';
require_once __DIR__ . '/../classes/classUsuario.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';

    if (empty($email) || empty($senha)) {
        $_SESSION['login_erro'] = 'Preencha todos os campos.';
        header('Location: ../../index.php');
        exit;
    }

    try {
        $conexao = Conexao::getConexao();
        $usuario = new Usuario($conexao, null, null, null, null);

        $pdo = $conexao; // Cria a variável $pdo com a conexão já obtida
        $user = $usuario->login($email, $senha, $pdo);

        if ($user && password_verify($senha, $user['senha'])) {
            $_SESSION['usuario_id'] = $user['id'];
            $_SESSION['usuario_email'] = $user['email'];
            unset($_SESSION['login_erro']);
            header('Location: ../home.php');
            exit;
        } else {
            $_SESSION['login_erro'] = 'E-mail ou senha inválidos.';
            header('Location: ../../index.php');
            exit;
        }
    } catch (PDOException $e) {
        $_SESSION['login_erro'] = 'Erro ao conectar: ' . $e->getMessage();
        header('Location: ../../index.php');
        exit;
    }
} else {
    $_SESSION['login_erro'] = 'Método de requisição inválido.';
    header('Location: ../../index.php');
    exit;
}
?>