<?php

    include('conexao.php');

    $nome_produto = $_POST['nome_produto'];
    $preco_produto = $_POST['preco_produto'];
    $qtd_produto = $_POST['qtd_produto'];
    $query = "INSERT INTO produtos VALUES ('$nome_produto','$preco_produto','$qtd_produto', NULL)";
    $aux = $conexao->query($query) or die ( mysqli_error( $conexao ) );

    if(!$aux){
        echo 'Erro ao cadastrar o produto desejado';
    }else{
        header('Location: ../cadastro_produto.php');

    }

?>