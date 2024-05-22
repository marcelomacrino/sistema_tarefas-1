<?php

include_once 'class_Conexao.php';
include_once 'class_Tarefa.php';

interface IRepositorioTarefa {
    public function cadastrarTarefa($Tarefa);
    public function alterarTarefa($Tarefa);
    public function listarTodasTarefas();
    public function buscarTarefa($id);
    public function removerTarefa($id);
}

class ReposiorioTarefaMYSQL implements IRepositorioTarefa {

    private $conexao;

    public function __construct()
    {
        $this->conexao = new Conexao("localhost","root","","tarefas");
        if($this->conexao->conectar() == false) 
        {
            echo "Erro".mysqli_connect_error();
        }
    }
    
    public function cadastrarTarefa($Tarefa)
    {
        
    }

    public function alterarTarefa($Tarefa)
    {
        
    }

    public function listarTodasTarefas()
    {
        
    }

    public function buscarTarefa($id)
    {
        
    }

    public function removerTarefa($id)
    {
        
    }
}

?>