<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-warning">
  <li class="breadcrumb-item"><a href="index.php" class="text-dark font-weight-bold">Home</a></li>
  <li class="breadcrumb-item active text-white font-weight-bold" aria-current="page" >Categorias</li>
  </ol>
</nav>
<div class="card mb-5 bg-dark border shadow rounded">
   <div class="row card-body">
    <div class="col-sm-9">
      <h4 class="text-white font-weight-bold">Categoria</h4>
    </div>

    <div class="col-sm-3">
      <a href="index.php?pg=form-categoria&operacao=cadastrar" class="text-warning" title="Nova Categoria">
        <i class="far fa-plus-square text-warning"></i> Nova Categoria
      </a>	
    </div>
  </div>
</div>

<?php 
  if (isset($_GET['msg']) ) {
    
    echo "<div class='alert alert-success'>".$_GET['msg']."</div>";
  }
?>

<table class="table table-condensed">
  <thead>
    <tr>
      <th scope="col">cod Categoria</th>
      <th scope="col">Categoria</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>

  <tbody class="bg-secondary text-white font-weight-bold">

  <?php 
    //incluir o banco
    include("../connection/conexao.php");

    //criar a consulta SQL
    $consultaCategoria = "SELECT * FROM tbl_categoria ORDER BY cod_categoria DESC";

    //executar a instrução
    $executa = $mysqli->query($consultaCategoria);

    //obter o numero de linhas da consulta
    $totalLinhas = $executa->num_rows;

    //nao retornando nenhuma linha mostrar msg para o ususario
    if($totalLinhas < 1){

      echo "<tr class='text-warning'>
            <td colspan='4'> Nenhuma categoria cadastrada!</td>
            </tr>";
    }else{
      //mostrar os dados da consulta
     
      //criar um while para exibir os dados
    while($dados = $executa->fetch_assoc()){
     
    ?>
    <tr>
      <td scope="col"><?php echo $dados['cod_categoria']?> </td>
      <td scope="col"> <?php echo $dados['categoria']?></td>
      <td scope="col">
        <a href="index.php?pg=form-categoria&operacao=editar&cod_categoria=<?php echo 
        $dados['cod_categoria'];?> " class="text-warning font-weight-bold"> 
         editar
        </a>  
      </td>
      <td scope="col">
        <a href="acoes-categoria.php?operacao=excluir&cod_categoria=<?php echo $dados
        ['cod_categoria'];?>" class="text-warning font-weight-bold"> excluir </a> 
      </td>
    </tr>

<?php
    } // fim do while
  } //fim do else ?>

 </tbody>	
</table>