<?php session_start();

//receber os campos do form
    //categoria_produto - nome_produto - descrição - preco
        // menos o campo imagem

$categoria_produto = $_POST['categoria_produto'];
$nome_produto = $_POST['nome_produto'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];

$operacao = $_POST['operacao'] ?: $_GET['operacao'];
$cod_login = $_SESSION['cod_login'];

if ($operacao == 'cadastrar') {
    
    $sql = "INSERT INTO tbl_produto (categoria_produto,nome_produto,preco,descricao,produto_usuario)
            VALUES ('$categoria_produto','$nome_produto','$preco','$descricao','$cod_login')";

    $mensagem = "Produto adicionado com sucesso!";
}

//incluir a conexao
include("../connection/conexao.php");

//executar o sql
$executa = $mysqli->query($sql);

//verificar se o sql foi executado e redirecionar para "lista de anuncios" com a msg de sucesso ou erro

if ($executa) {
    header("location:index.php?pg=lista-anuncios&msg=$mensagem");
  }else{
    header("location:index.php?pg=lista-anuncios&msg=Erro na execução.Contate o suporte!");
  }


?>