<?php

require_once("conexao.php");
$query = 'SELECT * FROM tabela_produto';
$resultado = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>CONSULTAR</title>
</head>
<body>
CONSULTAR
<HR>

<table border=1><tr><th>ID</th><th>Tipo</th><th>Produto</th><th>Ingredientes</th><th>Precauções</th><th>Preço</th><th>Volume</th></tr>

<?php while($busca = $resultado->fetch_assoc()){ ?>

  <tr>
    <th>
    <td><?php echo $busca["id_produto"]?></td>
    <td><?php echo $busca["id_tipo_produto"]?></td>
    <td><?php echo $busca["nome_produto"]?></td>
    <td><?php echo $busca["ingredientes"]?></td>
    <td><?php echo $busca["precaucoes"]?></td>
    <td><?php echo $busca["valor_produto"]?></td>
    <td><?php echo $busca["volume_produto"]?></td>
    <td><button type = "submit" class = "btn btn-danger" data-toggle="modal" data-target="#teste">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
    </svg>
    </button>
</th>
</tr>
    
<?php } ?>
  
</table>

<div class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Texto do corpo do modal, é aqui.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>


</script>

</body>

</html>
