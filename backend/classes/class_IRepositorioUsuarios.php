<?php

include_once 'class_Conexao.php';
include_once 'class_Usuario.php';

interface IRepositorioUsuario {
    public function cadastrarUsuario($usuario);
    public function alterarUsuario($usuario);
    public function listarTodosUsuarios();
    public function buscarUsuario($id);
    public function removerUsuario($id);
    public function verificaUsuario($email);
}

class ReposiorioUsuarioMYSQL implements IRepositorioUsuario {

    private $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao("localhost","root","","tarefas");
        if($this->conexao->conectar() == false) 
        {
            echo "Erro".mysqli_connect_error();
        }
    }
    
    public function cadastrarUsuario($usuario)
    {

        $id = $usuario->getId();
        $nome = $usuario->getNome();
        $email = $usuario->getEmail();
        $senha = $usuario->getSenha();
        $minhaSenha="!@#$%¨&*Mar03011969";
        $minhaSenha1="7395239527369032";
        $senha_cript = sha1($minhaSenha1).sha1($senha).sha1($minhaSenha);
        $telefone = $usuario->getTelefone();
        $tipo = $usuario->getTipo();
        $status = $usuario->getStatus();
        $foto = $usuario->getFoto();

        $sql = "INSERT INTO tbl_usuarios (id,nome,email,senha,telefone,tipo,status,foto)
         VALUES ('$id','$nome','$email','$senha_cript','$telefone','$tipo','$status','$foto')";
        
        $this->conexao->executarQuery($sql);

    }

    public function alterarUsuario($usuario)
    {
        
    }

    public function listarTodosUsuarios()
    {
        
    }

    public function buscarUsuario($id)
    {
        
    }

    public function removerUsuario($id)
    {
        
    }

    public function verificaUsuario($email){
        $sql = "SELECT * FROM tbl_usuarios WHERE email = '$email'";
        $encontrou = $this->conexao->executarQuery($sql);
        print_r($encontrou);
        return $encontrou;
    }
}

$respositorioUsuario = new ReposiorioUsuarioMYSQL(); // criar na classe pois assim não é preciso criar em todas as scripts.

?>