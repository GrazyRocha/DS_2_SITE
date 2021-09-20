<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Altera senha</li>
  </ol>
</nav>

<h4>Alterar senha</h4>

<div class="container">
  <div class="row">
    <div class="col-sm-4 offset-sm-4 mt-4">
                
    <form action="index.php" method="POST" id="formAlteraSenha">

    <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                <i class="fas fa-user"></i></span>
            </div>
            <input type="mail" name="email" id="email" class="form-control" 
            placeholder="Email" aria-label="Email" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                <i class="fas fa-unlock-alt"></i></span>
            </div>
            <input type="password" name="SenhaAtual" id="SenhaAtual" class="form-control" 
            placeholder="Senha Atual" aria-label="Senha Atual" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                <i class="fas fa-unlock-alt"></i></span>
            </div>
            <input type="password" name="NovaSenha" id="NovaSenha" class="form-control" placeholder="Digite a nova senha" aria-label="Digite a nova senha" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">
                <i class="fas fa-unlock-alt"></i></span>
            </div>
            <input type="password" name="RepitaSenha" id="RepitaSenha" class="form-control" placeholder="Repita a nova senha" aria-label="Repita a nova senha" aria-describedby="basic-addon1">
          </div>

          <div class="form-group">
              <button type="submit" class="btn btn-outline-warning btn-lg">Alterar</button>
                    </div>
      </form>
    </div>
  </div>
</div>