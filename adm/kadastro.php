<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<h2>INSERIR DADOS</h2>
        <BR>
        <form action="inserir.php" method="POST">
            <label for="nome do produto">Nome Do Produto:<input type="text" id="nome_produto" name ="nome_produto"></label>
            <br>
            <label for="ingredientes">ingredientes:<input type="text" id="ingredientes" name ="ingredientes"></label>
            <br>
            <label for="tipo">Tipo:<input type="text" id="tipo_produto" name ="tipo_produto"></label>
            <br>
            
            <label for="volume">Volume:<input type="text" id="volume_produto" name ="volume_produto"></label>
            <br>
            <label for="preco">Preço:<input type="text" id="valor_produto"  name ="valor_produto"></label>
            <br>
            <label for="precaucoes">Precauções:<input type="text" id="precaucoes" name ="precaucoes"></label>
            <br>





           
            <input type = "submit" value="Salvar">
          </form>
  
</body>
</html>