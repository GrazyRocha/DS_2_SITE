<?php session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmaSenha = $_POST['confirmaSenha'];
$termo = $_POST['termo'];

$_SESSION['dadosForm'] = $_POST;

$_SESSION['mensagemErro'] = array();

if(strlen($nome)<1){
    $_SESSION['mensagemErro'][] = "O campo nome é obrigatório";
}

if(strlen($email)<1){
    $_SESSION['mensagemErro'][] = "O campo email é obrigatório";
}

if(strlen($senha)<5){
    $_SESSION['mensagemErro'][] = "O campo senha deve ter no minímo 5 caracteres";
}

if($senha<>$confirmaSenha){
    $_SESSION['mensagemErro'][] = "As senhas nao conferem";
}

if(!isset($termo)){
    $_SESSION['mensagemErro'][] = "voce deve aceitar os termos";
}

if(sizeof($_SESSION['mensagemErro'])>0){
    
    header("location:registro.php?erro=1");

}else{ 
    echo "Continuar com o cadastro";

}

?>