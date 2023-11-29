<!doctype html>
<html lang="pt-BR" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Construção Boa MOC</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body style="heigth: 50px">
    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    date_default_timezone_set('America/Sao_Paulo');
    setlocale(LC_MONETARY,"pt-BR");
    ?>
    
    <style>
        /* Modify the background color */
         
        .navbar-custom {
            background-color: lightgreen;
        }
        /* Modify brand and text color */
         
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            color: black;
        }
    </style>

  <nav class="navbar navbar-expand-lg bg-body-tertiary" style="heigth: 50px">
  <div class="container-fluid" style="heigth: 50px">
    <a class="navbar-brand" href="login/index.php" ><i class="fa-solid fa-user"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Clientes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=clientes">Cadastrar Cliente</a></li>
            <li><a class="dropdown-item" href="?page=listarClientes">Consultar Clientes</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produtos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrarProduto">Cadastrar Produto</a></li>
            <li><a class="dropdown-item" href="?page=listarProduto">Consultar Produtos</a></li>
          </ul>
        </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Pedidos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="?page=cadastrarPedido">Cadastrar Pedido</a></li>
            <li><a class="dropdown-item" href="?page=listarPedido">Consultar Pedido</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="?page=historico">Histórico</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=relatorio">Relatório Mensal</a>
        </li>
    </div>
  </div>
</nav>



      <div class="container">
        <div class="row">
          <div class="col mt-5">
            <?php
              include("config.php");
              switch(@$_REQUEST["page"]){
                case "clientes":
                  include("clientes.php");
                  break;
                case "salvarCliente":
                  include("salvarCliente.php");
                  break;
                case "salvarProduto":
                  include("salvarProduto.php");
                  break;
                case "listarClientes":
                  include("listarClientes.php");
                  break;
                case "editarCliente":
                  include("editarCliente.php");
                  break;
                case "cadastrarPedido":
                  include("cadastrarPedido.php");
                  break;
                case "cadastrarProduto":
                  include("cadastrarProduto.php");
                  break;
                case "listarProduto":
                  include("listarProduto.php");
                  break;
                case "editarProduto":
                  include("editarProduto.php");
                  break;
                case "estoque":
                  include("estoque.php");
                  break;
                case "listarPedido":
                  include("listarPedido.php");
                  break;
                case "salvarPedido":
                  include("salvarPedido.php");
                  break;
                case "editarPedido":
                  include("editarPedido.php");
                  break;
                case "historico":
                  include("historico.php");
                  break;   
                case "faturamento":
                  include("faturamento.php");
                  break;
                case "relatorio":
                  include("relatorio.php");
                  break;
                case "desconto":
                  include("desconto.php");
                  break;
                  
                default: 
                  

              }
            ?>
          </div>
        </div>
      </div>
        
    
    <script src="js/script.js"></script>
    <script src="https://kit.fontawesome.com/9ccf533a61.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>