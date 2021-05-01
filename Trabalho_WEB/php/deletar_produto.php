<?php

    include('conexao.php');

    $nome=$_GET['nome'];

    $query = "DELETE FROM produtos WHERE nome_produto='$nome'";
    echo $query;
    $aux = $conexao->query($query) or die ( mysqli_error( $conexao ) );

    if(!$aux){
        echo 'Erro ao cadastrar o produto desejado';
    }else{
        header('Location: ../cadastro_produto.php');

    }

?>