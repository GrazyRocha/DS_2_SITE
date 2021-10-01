<?php session_start();
//receber os campos do formulario

$categoria = $_POST['categoria'];
$cod_login = $_SESSION['cod_login'];
$operacao = $_POST['operacao'] ?: $_GET['operacao'];

if ($operacao == "cadastrar") {
    $sql = "INSERT INTO tbl_categoria (categoria,categoria_cadastrado_por) 
                VALUES ('$categoria',$cod_login)";
                
    $mensagem = "Categoria cadastrada com sucesso!";
} //fim do cadastrar

if ($operacao == "editar") {
    $cod_categoria = $_POST['cod_categoria'];    

    $sql = "UPDATE tbl_categoria SET categoria='$categoria'
                WHERE cod_categoria='$cod_categoria' ";

    $mensagem = "Categoria alterada com sucesso!";

} //fim do editar

if ($operacao == "excluir") {
    //receber o codigo da categoria que sera excluida
    $cod_categoria = $_GET['cod_categoria'];

    $sql = "DELETE FROM tbl_categoria WHERE cod_categoria='$cod_categoria'";
   
    $mensagem = "Categoria excluida com sucesso!";
    
} // fim do excluir

//estrutura p/ executar a instrucao SQL no banco
include("../connection/conexao.php");

//executar a instrução SQL
$executa = $mysqli->query($sql);

if ($executa) {
  header("location:index.php?pg=lista-categorias&msg=$mensagem");
}else{
  header("location:index.php?pg=lista-categorias&msg=Erro ao executar.Contate o administrador");
}

?>