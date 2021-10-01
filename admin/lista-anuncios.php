<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-warning">
  <li class="breadcrumb-item"><a href="index.php" class="text-dark font-weight-bold">Home</a></li>
  <li class="breadcrumb-item active text-white font-weight-bold" aria-current="page">Anúncios</li>
  </ol>
</nav>
<div class="card mb-5 bg-dark border shadow rounded">
   <div class="row card-body">
    <div class="col-sm-9">
      <h4 class="text-white font-weight-bold">Anúncios</h4>
    </div>

    <div class="col-sm-3">
      <a href="index.php?pg=form-anuncio&operacao=cadastrar" class="text-warning" title="Nova Categoria">
        <i class="far fa-plus-square text-warning" ></i> Novo Produto
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
      <tr>
        <td><strong>cod Produto</strong></td>
        <td><strong>Categoria</strong></td>
        <td><strong>Produto</strong></td>
        <td><strong>Descrição</strong></td>
        <td><strong>Preço</strong></td>
        <td></td>
        <td></td>
      </tr>

      <tbody class="bg-secondary text-white font-weight-bold">  

  <?php 
    //incluir a conexao
    include("../connection/conexao.php");

    //criar uma consulta na tbl_produto
    $consultaProduto = "SELECT * FROM tbl_produto ORDER BY cod_produto DESC";

    //executar a consulta
    $executa = $mysqli->query($consultaProduto);

    //obter o numero de linhas
        $totalLinhas = $executa->num_rows;

    //nao retornando nenhuma linha mostrar msg para o ususario
    if($totalLinhas < 1){

      echo "<tr class='text-warning'>
            <td colspan='4'> Nenhuma produto cadastrado!</td>
            </tr>";
    }else{  
      //criar um while para exibir os dados

    while($dados = $executa->fetch_assoc()){
     
    ?>
      <tr">
        <td><?php echo $dados['cod_produto'];?></td>
        <td><?php echo $dados['categoria_produto'];?></td>
        <td><?php echo $dados['nome_produto'];?></td>
        <td><?php echo $dados['descricao'];?></td>
        <td><?php echo $dados['preco'];?></td>
        <td><a href="#" class="text-warning font-weight-bold">Editar</a></td>
        <td><a href="#" class="text-warning font-weight-bold">Excluir</a></td>
      </tr>
  <?php
    } // fim do while
  } //fim do else 
  ?>

</tbody>
</table>       

