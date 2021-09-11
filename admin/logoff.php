<?php session_start();

//destruir todas as variaveis da sessão
session_destroy();

header("location:../login.php");


?>