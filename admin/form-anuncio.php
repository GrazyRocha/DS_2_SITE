<nav aria-label="breadcrumb">
  <ol class="breadcrumb bg-warning">
    <li class="breadcrumb-item"><a href="index.php" class="text-dark font-weight-bold">Home</a></li>
    <li class="breadcrumb-item"><a href="index.php?pg=lista-anuncios" class="text-white font-weight-bold">Anúncios</a></li>
    <li class="breadcrumb-item active text-dark font-italic" aria-current="page">Cadastro de Anúncio</li>
  </ol>
</nav>

<?php 
  $operacao = $_GET['operacao'];

  include("../connection/conexao.php");

 ?>

<div class="row bg-secondary">
  <div class="col-sm-4">
    <form action="acoes-anuncio.php" method="POST" enctype="multipart/form-data">

      <div class="form-group">
        <label for="categoria" class="font-weight-bold">Categoria do anúncio</label>

        <select name="categoria_produto" class="form-control" required>
          <option value="" >Selecione a categoria</option>
    <?php  
      //criar a consulta sql
      $consultaCategoria = "SELECT * FROM tbl_categoria ORDER BY categoria ASC";

      $executaConsultaCategoria = $mysqli->query($consultaCategoria);

      $totalLinhasCategoria = $executaConsultaCategoria->num_rows;

      if ($totalLinhasCategoria > 0) {
        
        while ($categoria = $executaConsultaCategoria->fetch_assoc()) {?>

      <option value="<?php echo $categoria['cod_categoria'];?>">
        <?php echo $categoria['categoria'];?></option>
          
        <?php } // fim do while

      } // fim do if
    
    ?>
    </select>

      </div>

      <div class="form-group">
        <label for="nome_produto" class="font-weight-bold">Título do anúncio</label>
        <input type="text" name="nome_produto" class="form-control" 
        placeholder="Informe o título para o anúncio" value="" required>
      </div>

      <div class="form-group">
        <label for="descricao" class="font-weight-bold">Descrição</label>
        <textarea class="form-control" name="descricao" required></textarea>
      </div>

      <div class="form-group">
        <label for="preco" class="font-weight-bold">Preço</label>
        <input type="text" name="preco" class="form-control">
      </div>


      <div class="form-group">
        <label for="imagem" class="font-weight-bold">Imagem</label>
        <input type="file" class="form-control" name="imagem">
      </div>

      <input type="hidden" name="operacao" value="<?php echo $operacao;?>">
      
      <!-- Campo para armazenar o código da categoria na operação "editar" -->
      <input type="hidden" name="cod_produto" value="">

      <button type="submit" class="btn btn-outline-warning btn-lg">Salvar</button>

    </form>
  </div>
</div>