<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">

</head>

<body class="background">

  <div class="container-sm d-flex justify-content-center">
    <main class="container-custom">
      <div class="card mb-3">
        <div class="row g-0">
          
          <div class="col-md-4 prueba">
            <img src="img/PhotoStudio0000.jpg" class="img-fluid rounded-start" alt="Un camarografo">
          </div>
          
          <div class="col-md-8 prueba2">
            <div class="card-body">
              
              <div class="d-flex  justify-content-center">
                  <h1 class="title form-margint">PhotoStudio</h1>
              </div>
              <div class="d-flex justify-content-center">
                  <p class="eslogan">¡Bienvenido a "la experiencia" con PhotoStudio!</p>
              </div>
              
           
              <form class="prueba3" method="post" action="./../controllers/LoginController.php">
                                
                  <div class="form-group row">
                        <label for="username" class="col-xl-2 col-form-label">Nombre de usuario</label>
                        <div class="col-sm-10 prueba3">
                          <input type="text" class="form-control" id="username" name="username" placeholder="Ingrese su nombre de usuario, ejemplo: Natanael" required>
                        </div>
                  </div>
                  <div class="form-group row">
                        <label for="password" class="col-xl-2 col-form-label">Contraseña</label>
                        <div class="col-sm-10 prueba3">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su contraseña, ejem: 1234" required>
                        </div>
                  </div>
                  <div class="row d-flex justify-content-center form-margint">
                        <div class="col-xl-3">
                          <input class="btn btn-lg btn-primary" type="submit" name="login" value="Login">
                        </div>
                  </div>

                  <div class=" d-flex justify-content-center form-margint">
                        <p>¿No estas registrado? <a href="RegisterUser.php">Registrate</a></p>
                  </div>
         
              </form>
              
            </div> <!--End card-body-->
          </div><!--End col-md-8-->
        </div><!--End row-->
      </div><!--End card mb-3-->
    </main>
  </div><!--End container-->


  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>