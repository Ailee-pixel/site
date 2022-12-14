<?php
require_once("conexao.php");

$id = $_GET['id'];

$query = "SELECT * FROM tabela_produto WHERE id_produto = $id";
$resultado = mysqli_query($con, $query);
$select = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Produtos - Forno & Lenha</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"/>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Forno & Lenha</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        
                    <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="dashboard.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Home
                            </a>
                            <div class="sb-sidenav-menu-heading">Op????es</div>
                                <a class="nav-link" href="dashboard_consulta_produtos.php">
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-archive" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="3" y="4" width="18" height="4" rx="2"></rect>
                                    <path d="M5 8v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-10"></path>
                                    <line x1="10" y1="12" x2="14" y2="12"></line>
                                 </svg></i></div>
                                Produtos
                            </a>
                            <a class="nav-link" href="reservas.php">
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <rect x="4" y="5" width="16" height="16" rx="2"></rect>
                                    <line x1="16" y1="3" x2="16" y2="7"></line>
                                    <line x1="8" y1="3" x2="8" y2="7"></line>
                                    <line x1="4" y1="11" x2="20" y2="11"></line>
                                    <rect x="8" y="15" width="2" height="2"></rect>
                                 </svg></i></div>
                                Reservas
                            </a>
                            <a class="nav-link" href="Categorias.php">
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-folder-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                    <line x1="12" y1="10" x2="12" y2="16"></line>
                                    <line x1="9" y1="13" x2="15" y2="13"></line>
                                 </svg></div>
                                Categorias
                            </a>
                            <a class="nav-link" href="categorias.php">
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-folder-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M5 4h4l3 3h7a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2"></path>
                                    <line x1="12" y1="10" x2="12" y2="16"></line>
                                    <line x1="9" y1="13" x2="15" y2="13"></line>
                                 </svg></div>
                                Site
                                </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php
                        if(isset ($session)){
                            echo $_SESSION['name'];
                        }else{
                            echo "Developer";
                        }
                        ?>
                        
                    </div>
                </nav>
            </div>
            
        <div id="layoutSidenav_content">
        <main>
            
        <div class="container-fluid px-4">
        <h1 class="mt-4">Editar Produto</h1>          
        <div class="card mb-4">
        
        </div>
        <div class="card mb-4">
        <div class="card-header">
        </div>
        <div class="card-body">
    
            <form class="row gx-3 gy-2 align-items-center" action="func_editar_produtos.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id?>">
            <label for="nome do produto">
            Nome Do Produto:
            <input type="text" class="form-control" value = "<?php echo $select['nome_produto']?>" id="nome_produto" name ="nome_produto"></label>
            <br>
            <label for="ingredientes">ingredientes:
            <input type="text"  class="form-control" value = "<?php echo $select['ingredientes']?>" id="ingredientes" name ="ingredientes"></label>
           
            <br>
            <div class=>
            <label  for="autoSizingSelect">Tipo</label>
            <select class="form-select" id="autoSizingSelect" id="tipo_produto" name="tipo_produto">
            <option selected><?php echo $select['tipo_produto']?></option>
            <option value="Pizza">Pizza</option>
            <option value="Bebida">Bebida</option>
            <option value="Sobremesa">Sobremesa</option>
            </select>
            </div>  
            

            <br>

           
            <label for="volume">Volume:
            <input type="text" class="form-control" value = "<?php echo $select['volume_produto']?>" id="volume_produto" name ="volume_produto" ></label>
            <br>
            <label for="preco">Pre??o:
            <input type="text" class="form-control" value = "<?php echo $select['valor_produto']?>" id="valor_produto"  name ="valor_produto" ></label>
            <br>
            <label for="precaucoes">Precau????es:
            <input type="text" class="form-control" value = "<?php echo $select['precaucoes']?>" id="precaucoes" name ="precaucoes" ></label>
            <br>
            <label for="Imagem">Imagem Ilustrativa:
            <input type="text" class="form-control" value = "<?php echo $select['imagem_produto']?>" id="imagem_produto" name="imagem_produto">
            <br>
             <input class = "btn btn-warning" type = "submit" value="Atualizar">
             <a class="btn btn-danger" href = "dashboard_consulta_produtos.php">Cancelar</a>
            </form>
            
            </div>

            </main>
            </div>
        
        
        
        
        
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
