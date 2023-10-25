<?php 
    session_start();
  ?>

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

          <div class="col-md-4 not-img">
            <img src="img/PhotoStudio0000.jpg" class="img-fluid rounded-start h-100" alt="Un camarografo">
          </div>

          <div class="col-md-8 form100">
            <div class="card-body">

              <div class="d-flex  justify-content-center">
                <h1 class="title form-margint">PhotoStudio</h1>
              </div>
              <div class="d-flex justify-content-center">
                <p class="eslogan">¡Bienvenido a "la experiencia" con PhotoStudio!</p>
              </div>


              <form id="form-login" class="form-margin" method="post" action="./../controllers/LoginController.php">

                <div class="form-group row col-form-label label-size">
                  <label for="username" class="col-xl-2 ">Nombre de usuario</label>
                  <div class="col-sm-10 width-col">
                    <input type="text" class="form-control" id="username" name="username"
                      placeholder="Ingrese su nombre de usuario, ejemplo: Natanael">
                  </div>
                </div>
                <div class="form-group row col-form-label label-size">
                  <label for="password" class="col-xl-2">Contraseña</label>
                  <div class="col-sm-10 width-col">
                    <input type="password" class="form-control" id="password" name="password"
                      placeholder="Ingrese su contraseña, ejem: 1234">
                  </div>
                </div>

                <?php if (isset($_SESSION['user_not_found']) || isset($_SESSION['user_wrong'])): ?>

                  <div class="alert alert-danger mt-3" role="alert">
                    <ul>

                      <?php
                      if (isset($_SESSION['user_not_found'])) {
                        echo '<li>' . $_SESSION['user_not_found'] . '</li>';
                      }
                      if (isset($_SESSION['user_wrong'])) {
                        echo '<li>' . $_SESSION['user_wrong'] . '</li>';
                      }
                      ?>
                    </ul>


                  </div>

                <?php endif; ?>

                <div class="row d-flex justify-content-center form-margint">
                  <div class="col-lg-3">
                    <input class="btn btn-lg btn-primary" type="submit" name="login" id="login" value="Iniciar Sesión">
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

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="js/SweetAlert.js"></script>
</body>

</html>

<?php
if (isset($_SESSION['user_not_found'])) {
  unset($_SESSION['user_not_found']);
}
if (isset($_SESSION['user_wrong'])) {
  unset($_SESSION['user_wrong']);
}
?>