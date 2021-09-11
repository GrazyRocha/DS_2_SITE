<?php session_start();

// se a variavel de sessao cod_login nao existir direcionar p/ tela de login

if (!isset($_SESSION['cod_login']) ) {
    
    header("location:../login.php");
}

?>