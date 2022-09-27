<?php
require_once("conexao.php");

$nome =  $_POST['nome_produto']; 
$ingredientes = $_POST['ingredientes'];
$tipo = $_POST['tipo_produto'];
$precaucoes = $_POST['precaucoes'];
$volume = $_POST['volume_produto'];
$valor = $_POST['valor_produto'];




$inserir = "INSERT INTO tabela_produto(nome_produto, ingredientes, tipo_produto, precaucoes, volume_produto, valor_produto) VALUES ('$nome ', '$ingredientes', '$tipo', '$precaucoes', '$volume', '$valor')";
$salvar = mysqli_query($con,$inserir);


if(mysqli_insert_id($con)){
    header("Location:produtos.php");
}else{
    echo "Erro ao gravar!";
}
mysqli_close($con);

