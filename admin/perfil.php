<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Perfil</li>
  </ol>
</nav>

<h4>Meu Perfil</h4>

<div class="container">
  <div class="row">
    <div class="col-sm-4 offset-sm-4 mt-4">

    <p class="text-center">Alterar imagem (.jpeg,.png,.gif,.bmp) </p>
      <div class="form-group mb-3">
         <input type="file" name="imagem" class="form-control"
         >
              </div>
   
                
    <form action="index.php" method="POST">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                <i class="fas fa-user"></i></span>
            </div>
            <input type="text" name="NomeCompleto" id="NomeCompleto" class="form-control" 
            placeholder="Nome Completo" aria-label="Nome Completo" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                <i class="fas fa-unlock-alt"></i></span>
            </div>
            <input type="mail" name="email" id="email" class="form-control" 
            placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
          </div>

          <div class="form-group">
              <button type="submit" class="btn btn-outline-warning btn-lg">Alterar</button>
                    </div>
      </form>
    </div>
  </div>
</div>