<!DOCTYPE html>
<!-- saved from url=(0063)https://getbootstrap.com.br/docs/4.1/examples/starter-template/ -->
<html lang="pt-br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon/novo.ico">

    <title>Achei Voce.com</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Estilos customizados para esse template -->
    <link href="css/starter-template.css" rel="stylesheet">
    <!-- fonte icones -->
    <script src="js/fontawesome.js"></script>
</head>

<body cz-shortcut-listen="true" class="bg-light">
    <main role="main" class="container">

        <div class="row">
            <div class="col-sm-4 offset-sm-4 border shadow bg-white rounded">
                <h1 class="text-center">
                    <a href="index.php"><i class="fas fa-users"></i>
                        Achei você.com</a>
                </h1>
                <p class="text-center text-warning font-weight-bold">Crie sua conta gratuita!</p>
                </h1>

                <form action="">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="nome" class="form-control" placeholder="Nome Completo" aria-label="Nome Completo" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="text" name="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-unlock-alt"></i></span>
                        </div>
                        <input type="password" name="senha" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-unlock-alt"></i></span>
                        </div>
                        <input type="password" name="senha" class="form-control" placeholder="Repita a Senha" aria-label="Repita a Senha" aria-describedby="basic-addon1">
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">
                            Aceitar os <a href="#" data-toggle="modal" data-target="#modalTermos">termos</a>
                        </label>
                    </div>

                    <div class="form-group text-right">
                        <button type="button" class="btn btn-outline-warning btn-lg">Cadastrar</button>
                    </div>
                </form>
                <p><a href="login.php">Ja tenho uma conta</a></p>
            </div>
        </div>
    </main><!-- /.container -->

    <!-- Modal -->
    <div class="modal fade" id="modalTermos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-warning" id="exampleModalLabel">Termos Achei Voce.com</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h1 class="h5">Nossos termos</h1>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illum laudantium
                        exercitationem, nihil labore numquam expedita tenetur temporibus at consequatur
                        animi fugit cupiditate nostrum aliquid repudiandae odit similique id, modi autem?</p>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe omnis delectus nesciunt natus
                        nostrum minus animi odio veniam a. Facilis, quidem. In, perspiciatis distinctio aspernatur
                        cupiditate doloribus odio dolores quas.</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="js/jquery-3.3.1.slim.min.js.download"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>