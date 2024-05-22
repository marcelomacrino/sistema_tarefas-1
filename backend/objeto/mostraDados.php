<?php

include_once '../classes/class_Conexao.php';
include_once '../classes/class_Usuario.php';
include_once '../classes/class_Tarefas.php';

$conexao = new Conexao("localhost","root","","tarefas");
$conexao->conectar();

$usuario = new usuario(1,"João","joao_gomes@gmail.com","senha123","11-99876-4567","1","0","../public/imagens");
$tarefas = new tarefas(1,"Semana da Informática","Semana dedicada a feira de informática dos AIS","2024/04/10","2024/04/10","2024/04/12","Marcelo","0");

$sql = "INSERT INTO tbl_usuarios (id,nome,email,senha,telefone,tipo,status,foto) VALUES ('','João','joao_gomes@gmail.com','senha123','11-99876-4567','1','0','../public/imagens')";

$conexao->executarQuery($sql);

echo "ID Usuario: ".$usuario->getId();
echo "<br>";
echo "Nome Usuario: ".$usuario->getNome();
echo "<br>";
echo "Email: ".$usuario->getEmail();
echo "<br>";
echo "Senha: ".$usuario->getSenha();
echo "<br>";
echo "Telefone: ".$usuario->getTelefone();
echo "<br>";
echo "Tipo: ".$usuario->getTipo();
echo "<br>";
echo "Status: ".$usuario->getStatus();
echo "<br>";
echo "Foto: ".$usuario->getFoto();
echo "<br>";

echo "ID tarefa: ".$tarefas->getId();
echo "<br>";
echo "Título: ".$tarefas->getTitulo();
echo "<br>";
echo "Tarefa: ".$tarefas->getTarefa();
echo "<br>";
echo "Data Cadastro: ".$tarefas->getDataCadastro();
echo "<br>";
echo "Data início: ".$tarefas->getDataInicio();
echo "<br>";
echo "Dat Fim: ".$tarefas->getDataFim();
echo "<br>";
echo "Status: ".$tarefas->getStatusTarefa();
echo "<br>";
echo "Autor: ".$tarefas->getAutor();
echo "<br>";
?>