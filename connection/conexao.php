<?php

$servidor_bd = "localhost";
$usuario_bd = "root";
$senha_bd = "";
$banco = "bd_anuncios";

//conexao mysql
@$mysqli = new mysqli($servidor_bd, $usuario_bd, $senha_bd, $banco);

if ($mysqli->connect_errno) {
    echo "FALHA AO CONECTAR, CONTATE O ADMINISTRADOR!";

} else {
    
    mysqli_set_charset($mysqli, "utf8");
    
}


?>