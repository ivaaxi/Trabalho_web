<?php

include('conexao.php');

    $query = "DELETE FROM usuario WHERE seq_id_usuario=".$_GET['id'];
    $aux = $conexao->query($query);

    if(!$aux){
        echo 'Erro ao cadastrar usuario'; 
    }else{
        header('Location: ../cadastro_usuario.php');

    }



?>