<?php

    include('conexao.php');


    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $query = "INSERT INTO usuario VALUES ('$email','$usuario','$senha', seq_id_usuario)";
    $aux = $conexao->query($query);

    if(!$aux){
        echo 'Erro ao cadastrar usuario'; 
    }else{
        header('Location: ../index.html');

    }

?>