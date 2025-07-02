<?php

class Usuario
{
    private $nome;
    private $email;
    private $celular;
    private $senha;
    private $tipo;

    public function __construct($nome, $email, $celular, $senha, $tipo)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->celular = $celular;
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
        $this->tipo = $tipo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function verificarSenha($senha)
    {
        return password_verify($senha, $this->senha);
    }

    // Exemplo de método para login
    public function login($email, $senha, $pdo)
    {
        $stmt = $pdo->prepare("SELECT senha FROM usuarios WHERE email = :email LIMIT 1");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            return true;
        }
        return false;
    }
}
?>