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

                <?php
                session_start();

                if (isset($_GET['erro'])) {

                    $erro = @$_SESSION['mensagemErro'];
                    $dadosForm = $_SESSION['dadosForm'];
                }
                ?>

                <form action="cria-conta.php" method="POST" id="formCriaConta">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="nome" id="nome" class="form-control" 
                        placeholder="Nome Completo" aria-label="nome" aria-describedby="basic-addon1"
                        value="<?php echo @$dadosForm['nome'];?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="text" name="email" id="email" class="form-control" 
                        placeholder="email" aria-label="email" aria-describedby="basic-addon1"
                        value="<?php echo @$dadosForm['email'];?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-unlock-alt"></i></span>
                        </div>
                        <input type="password" name="senha" id="senha" class="form-control" 
                        placeholder="senha" aria-label="senha" aria-describedby="basic-addon1"
                        value="<?php echo @$dadosForm['senha'];?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fas fa-unlock-alt"></i></span>
                        </div>
                        <input type="password" name="confirmaSenha" id="confirmaSenha" class="form-control" 
                        placeholder="Repita a Senha" aria-label="Repita a Senha" aria-describedby="basic-addon1"
                        value="<?php echo @$dadosForm['confirmaSenha'];?>">
                    </div>

                    <?php 
                        if(@$dadosForm['termos'] == 'on'){
                            $checked = "   checked='checked'  ";
                        }
                    ?>

                    <div class="form-group form-check">
                        <input type="checkbox" id="termo" name="termo" value="termo" 
                        class="form-check-input" <?php echo "@checked";?>>
                        <label class="form-check-label" for="exampleCheck1">
                            Aceitar os <a href="#" data-toggle="modal" data-target="#modalTermos">termos e Condições.</a>
                        </label>
                    </div>

                    <?php 
                        if(isset($_GET['erro'])){

                            echo "<ul class='alert alert-danger'>";

                                foreach($erro as $mensagem){
                                    echo "<li>$mensagem</li>";
                                }

                            echo "</ul>";
                        }
                    ?>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-outline-warning btn-lg">Cadastrar</button>
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
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="jquery-validation/dist/jquery.validate.js"></script>

    <script>
        $(document).ready(function() {
            $("#formCriaConta").validate({

                rules: {
                    nome: 'required',
                    email: {
                        required: true,
                        email: true
                    },
                    senha: {
                        required: true,
                        minlength: 5
                    },
                    confirmaSenha: {
                        required: true,
                        minlength: 5,
                        equalTo: '#senha'
                    },
                    termo: 'required'
                },
                messages: {
                    nome: 'O campo nome completo é obrigatório!',
                    email: {
                        required: 'O campo email é obrigatorio!',
                        email: 'Informe um email valido'
                    },
                    senha: {
                        required: 'O campo senha é obrigatorio!',
                        minlength: 'A senha deve ter no minimo 5 caracteres.'
                    },
                    confirmaSenha: {
                        required: 'Repita a senha',
                        minlength: 'A senha deve ser igual a anterior!',
                        equalTo: 'As senhas nao conferem'
                    },
                    termo: 'Aceitar os termos e condições'
                },

                errorElement: "em",
                errorPlacement: function(error, element) {
                    // Add the `invalid-feedback` class to the error element
                    error.addClass("invalid-feedback");

                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.next("label"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-valid").removeClass("is-invalid");
                }

            })


        })
    </script>
</body>

</html>