<?php

$codigoAtivacao = $_GET['codigoAtivacao'];

include("connection/conexao.php");

//consultar na tabela se o codigo existe
$sql = "SELECT * FROM tbl_login 
        WHERE cod_ativacao=MD5('$codigoAtivacao') OR cod_ativacao='$codigoAtivacao' ";

$executaSql = $mysqli->query($sql);

//obter o total de linhas retornado pela consulta
$totalLinhas = $executaSql->num_rows;

//pegar os dados do select
    $dadosUsuario = $executaSql->fetch_assoc();

if ($totalLinhas == 1) {
    //ativar a conta do usuario
    $ativaConta = "UPDATE tbl_login SET 
                          cod_ativacao='',
                          status_login=1
                WHERE cod_login='".$dadosUsuario['cod_login']."' ";

    $executaAtivacao = $mysqli->query($ativaConta);

    echo "<p> Conta ativada com sucesso!</p>
          <p> <meta http-equiv='refresh' content='1;url=login.php'> 
          Redirecionando...</p>";
}else{

    echo "Codigo de ativação invalido!";

}
?>