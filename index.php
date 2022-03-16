<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="styles/css/bootstrap.css">
    <title>Criando repositorios</title>
</head>
<body>
   
 <section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

            <form id="login" action="consultas/consultarUsuario.php" method="post">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="form-control form-control-lg" />
              </div>
              
              <div class="form-outline form-white mb-4">
                <label class="form-label" for="senha">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Senha" class="form-control form-control-lg" />
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
            </form>

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>