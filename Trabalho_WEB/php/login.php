<?php

    include('conexao.php');

    if(empty($_POST['login'])  || empty($_POST['senha'])){
        header('Location: ../index.html');
        exit();
    }

$login = mysqli_real_escape_string($conexao, $_POST['login']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from usuario where nome_usuario = '{$login}' and senha_usuario = '{$senha}'";
$res = $conexao->query($query);
$aux = mysqli_fetch_array($res);

echo $aux;

if(!$res){
    echo 'erro';
    
}
else {
    
    if(empty($aux)){
        header('Location: ../index.html');
    }
    else

    header('Location: ../home.html');


}


echo $res;

?>