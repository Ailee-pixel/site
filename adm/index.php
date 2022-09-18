<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Acesso</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styl.css">
</head>
<body>
    <form class="form" action="auth.php" method="post">
        <div class="card">
            <div class="card-top">
                <img class="imglogin" src="imagens/login.png" class="img-fluid img-thumbnail"  alt="...">
                <h2 class="title">Forno & Lenha</h2>
                <p>Painel de Controle</p>
            </div>
            <div class="mb-3 row">
                <div class="col-sm-10">
                  <input type="text" name="username" class="form-control" id="E-mail" placeholder="Digite seu usuário" required>
              </div>
              <br>
              <br>
              <div class="mb-1 row">
                <div class="col-sm-11">
                  <input type="password" name="password" class="form-control" id="Senha" placeholder="Digite sua Senha" required>
              </div>
              </div>            
              </div>
                  <button class="btn btn-primary btn-sm" type="submit" value="login">Acessar</button>             
            
    </form>
    
    <script src="js/bootstrap.min.js"></script>
    
    </body>
</html>
