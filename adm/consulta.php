<?php

require_once("conexao.php");
$query = 'SELECT * FROM tabela_produto';
$resultado = mysqli_query($conexao, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CONSULTAR</title>
</head>
<body>
CONSULTAR
<HR>

<table border=1><tr><th>ID</th><th>Tipo</th><th>Produto</th><th>Ingredientes</th><th>Precauções</th><th>Preço</th><th>Volume</th></tr>

<?php while($busca = $resultado->fetch_assoc()){ ?>

  <tr>
    <td><?php echo $busca["id_produto"]?></td>
    <td><?php echo $busca["id_tipo_produto"]?></td>
    <td><?php echo $busca["nome_produto"]?></td>
    <td><?php echo $busca["ingredientes"]?></td>
    <td><?php echo $busca["precaucoes"]?></td>
    <td><?php echo $busca["valor_produto"]?></td>
    <td><?php echo $busca["volume_produto"]?></td>
    <td><img src="imagens/<?php echo $busca['imagem_produto']?>" style="width:15%; height:15%;"></td>
</tr>
    
<?php } ?>
  
</table>
</body>
</html>
