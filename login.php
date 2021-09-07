<!DOCTYPE html>
<!-- saved from url=(0063)https://getbootstrap.com.br/docs/4.1/examples/starter-template/ -->
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon/novo.ico">

    <title>Achei voce.com</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Estilos customizados para esse template -->
    <link href="css/starter-template.css" rel="stylesheet">
    <!-- fonte icones -->
    <script src="js/fontawesome.js"></script>
</head>

<body cz-shortcut-listen="true" class="bg-dark">
    <main role="main" class="container">

        <div class="row">
            <div class="col-sm-4 offset-sm-4 mt-4 border shadow bg-dark rounded">
                <h2 class="text-center">
                    <a href="index.php" class="text-warning" class="font-weight-bold"><i class="fas fa-search"></i>
                        Achei Você.com</a>
                </h2 class="text-center">
                <p class="text-center text-white font-weight-bold">
                    Faça o login para inicio da sessão!</p>

                <?php session_start();

                if (isset($_GET['erro']) ) {

                    $dadosFormLogin = @$_SESSION['dadosFormLogin'];
                    $erroLogin = @$_SESSION['mensagemErroLogin'];
                }
                ?>

                <form action="valida-login.php" method="POST" id="formLogin">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="mail" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail" 
                        aria-describedby="basic-addon1" 
                        value="<?php echo @$dadosFormLogin['email']; ?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-unlock-alt"></i></span>
                        </div>
                        <input type="password" name="senha" class="form-control" placeholder="Senha" 
                        aria-label="Senha" aria-describedby="basic-addon1" 
                        value="<?php echo @$dadosFormLogin['senha']; ?>">
                    </div>

                    <?php 
                    if (isset($erroLogin) ) {

                        echo "<ul class='alert alert-danger'>";

                        foreach ($erroLogin as $erro) {

                            echo "<li> $erro </li>";
                        }
                        echo "</ul>";
                    }

                    ?>

                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-outline-warning btn-lg">Entrar</button>
                    </div>

                </form>

                <p>
                    <a href="recupera-senha.php" class="text-white font-weight-bold">Esqueceu a senha?</a>
                </p>

                <p>
                    <a href="registro.php" class="text-white font-weight-bold">Criar uma conta</a>
                </p>
            </div>
        </div>

    </main><!-- /.container -->

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="js/jquery-3.js"></script>

    <script src="js/bootstrap.js"></script>


</body>

</html>