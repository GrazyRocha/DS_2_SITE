<?php session_start();

//receber os dados do formulario
$email = $_POST['email'];
$senha = $_POST['senha'];

$_SESSION['dadosFormLogin'] = $_POST; //armazena todos os dados vindos via post
$_SESSION['mensagemErroLogin'] = array(); //array para armazenar as mensagens de erro

if (strlen($email) < 1){
    $_SESSION['mensagemErroLogin'][] = "O campo e-mail é obrigatorio!";
}
if (strlen($senha) < 1){
    $_SESSION['mensagemErroLogin'][] = "O campo senha é obrigatorio!";
}

//incluir a conexao
include("connection/conexao.php");

// consulta para verificar se o email e senha informados existem
$consultaLogin = "SELECT * FROM tbl_login 
                    WHERE email='$email' AND senha= MD5('$senha')";
//executar a consulta
$executaConsulta = $mysqli->query($consultaLogin);

//total de linha retornados pela consulta
$totalLinhas = $executaConsulta->num_rows;

//obter os dados do select
$dadosUsuario = $executaConsulta->fetch_assoc();

if ($totalLinhas < 1) {
    $_SESSION['mensagemErroLogin'][] = "Usuário ou senha inválidos!";
}

if ( $dadosUsuario['status_login'] == 0 ) {
   
    $cod_ativacao = $dadosUsuario['cod_ativacao'];
    $mensagem = "Voce ainda nao ativou sua conta.
                <a href='ativa_conta.php?codigoAtivacao=$cod_ativacao'> ATIVAR AGORA!</a>";
                
    $_SESSION['mensagemErroLogin'][] = $mensagem;
}

if (sizeof($_SESSION['mensagemErroLogin']) > 0 ) {

     header("location:login.php?erro=1"); 
         
}else{

    unset($_SESSION['mensagemErroLogin']);
    unset($_SESSION['dadosFormLogin']);
    
    //armazenar dados em variaveis de sessao e direcionar o usuario p/ area adm.
    //codigo do usuario
    $_SESSION['cod_login'] = $dadosUsuario['cod_login'];

    //nome do usuario
    $_SESSION['nome'] = $dadosUsuario['nome'];

    header("location:admin/index.php");
}

?>