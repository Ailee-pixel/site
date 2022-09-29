<?php
require_once("conexao.php");

$id = $_POST['id'];
$deletar = "DELETE FROM tabela_produto WHERE id_produto = $id";
$excluir = mysqli_query($con, $deletar);

if(mysqli_affected_rows($con)){
    HEADER("Location:dashboard_consulta_produtos.php");
    }else{
        echo "ERRO AO EXCLUIR";
    }
    mysqli_close($con);
     







?>