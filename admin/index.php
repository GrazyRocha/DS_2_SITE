<?php 
include("verifica-logado.php");
?>

<!DOCTYPE html>
<!-- saved from url=(0063)https://getbootstrap.com.br/docs/4.1/examples/starter-template/ -->
<html lang="pt-br"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon/novo.ico">

    <title>Achei Você.com</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- Estilos customizados para esse template -->
    <link href="../css/starter-template.css" rel="stylesheet">
    <!-- fonte icones -->

    <script src="../js/fontawesome.js"></script>
  </head>

  <body class="bg-dark" >
  
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.php"> Admin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" 
      aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(atual)</span></a>
        </li>
         
          <li class="nav-item">
            <a class="nav-link" href="index.php?pg=lista-categorias">Categorias</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="index.php?pg=lista-anuncios">Anuncios</a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" 
            aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['nome'];?> </a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="index.php?pg=perfil">
              Editar perfil</a>
              <a class="dropdown-item" href="index.php?pg=altera-senha">
              Alterar senha</a>
              </div>
          </li>
        </ul>

        <div class="my-2 my-lg-0">
          <a href="logoff.php" class="btn btn-outline-light my-2 my-sm-0" >
            <i class="fas fa-sign-out-alt"></i>
            Sair</a>
        </div>
      </div>
    </nav>

    <main role="main" class="container bg-light border shadow rounded">

    <?php 
      if (isset($_GET['pg']) ) {
        $pagina = $_GET['pg'];

        // verificar se o arquivo existe
        if (file_exists($pagina.".php") ) {
          include($pagina.".php");
          
        }else{
          include("404.php");
        } 
        
      }else{
        //incluir o arquivo padrao de boas vindas
        include("boas-vindas.php");
      }
    ?>

    </main><!-- /.container -->

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="../js/jquery-3.3.1.slim.min.js"></script>
    
    <script src="../js/bootstrap.js"></script>
  

</body></html>