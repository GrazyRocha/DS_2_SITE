<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-warning">
  <li class="breadcrumb-item"><a href="index.php" class="text-dark font-weight-bold">Home</a></li>
  <li class="breadcrumb-item"><a href="index.php?pg=lista-categorias" class="text-white font-weight-bold">Categorias</a></li>
  <li class="breadcrumb-item active text-dark font-italic" aria-current="page">Cadastro de Categoria</li>
  </ol>
</nav>

<?php 
  //receber a operação
  $operacao = $_GET['operacao'];

  if ($operacao == "editar") {
    $cod_categoria = $_GET['cod_categoria'];

    //incluir a conexao
    include("../connection/conexao.php");

    //criar um select para selecionar a categoria
    $consultaCategoria = "SELECT * FROM tbl_categoria 
              WHERE cod_categoria='$cod_categoria'";
    
    //executar a consulta
    $executa = $mysqli->query($consultaCategoria);

    //obter os dados da consulta
    $dados = $executa->fetch_assoc();
      
  }

?>

<div class="row bg-secondary">
  <div class="col-sm-4">

    <form action="acoes-categoria.php" method="POST">
      <div class="form-group">
        <label for="categoria">Categoria</label>
        <input type="text" class="form-control" id="categoria" 
        placeholder="Informe o nome da categoria" name="categoria" 
        required value="<?php echo @$dados['categoria'];?>" >
      </div>

      <!-- Campo para armazenar o código da categoria na operação "editar" -->
      <input type="hidden" name="cod_categoria" value="<?php echo $dados['cod_categoria'];?>">
      
      <input type="hidden" name="operacao" value="<?php echo $operacao;?>">

      <button type="submit" class="btn btn-outline-warning btn-lg">Salvar</button>

    </form>
  </div>
</div>