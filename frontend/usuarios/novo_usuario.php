<?php

    include_once '../../backend/classes/class_IRepositorioUsuarios.php';

    $usuarioNovo = new usuario('',$_POST['nome'],$_POST['email'],$_POST['senha'],$_POST['telefone'],1,0,$_FILES['arquivo']);
    
    $encontrou = $respositorioUsuario->verificaUsuario($_POST['email']);
    
    $linhas = $encontrou->num_rows;

    if($linhas>0){
        $mensagem = "Este email já foi cadastrado";
    } else {
        $respositorioUsuario->cadastrarUsuario($usuarioNovo);
    }

    header('Location:../principal/index.php');
    
    exit;

?>