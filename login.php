<!DOCTYPE html>
<!-- saved from url=(0063)https://getbootstrap.com.br/docs/4.1/examples/starter-template/ -->
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com.br/favicon.ico">

    <title>DS 2</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- fonte icones -->

    <script src="js/fontawesome.js"></script>
</head>

<body cz-shortcut-listen="true" class="bg-secondary">
    <main role="main" class="container">

        <div class="row">
            <div class="col-sm-4 offset-sm-4 border shadow bg-white rounded">
                <h1 class="text-center">
                    <a href="index.php">DS 2</a>
                </h1 class="text-center">
                <p>Faça o login para inicio da sessão!</p>

                <form action="">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="text" name="email" class="form-control" placeholder="E-mail"
                         aria-label="E-mail" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                            <i class="fas fa-unlock-alt"></i></span>
                        </div>
                        <input type="password" name="senha" class="form-control" placeholder="Senha" 
                        aria-label="Senha" aria-describedby="basic-addon1">
                    </div>

                    <div class="form-group text-right">
                        <button class="btn-btn-primary">Entrar</button>
                    </div>

                </form>

                <p>
                    <a href="recupera-senha.php">Esqueceu a senha?</a>
                </p>

                <p>
                    <a href="registro.php">Criar uma conta</a>
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