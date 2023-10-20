<!doctype html>
<html lang="en">

<head>
  <title>Registrar Usuario</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

</head>

<body class="background">

  <div class="container container-custom">

    <div class="card">

      <div class="card-body m-3">


        <div class="m-2 d-flex justify-content-center ">
          <h1 class="title">PhotoStudio</h1>
        </div>
        <div class="m-2 d-flex justify-content-center">
          <p class="eslogan">¡Resgistrate para vivir "la experiencia" con PhotoStudio!</p>
        </div>


        <form>
                <div class="form-group m-2">
                    <label for="username">Nombre de usuario</label>
                    <input type="text" class="form-control" name="username" id="username"
                      placeholder="Ingrese el nombre usuario" Required>
                    <small id="usernameHelp" class="form-text text-muted">Algunos ejemplos son: Juan, Alex, Pedro, etc.</small>
                </div>

                <div class="form-group m-2">
                    <label for="lastname">Apedillo del usuario</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Ingrese sus apellidos" Required>
                    <small id="lastnameHelp" class="form-text text-muted">Algunos ejemplos son: Rodríguez, González, Fernández, etc.</small>
               </div>

                <div class="form-group m-2">
                    <label for="numberphone">Teléfono</label>
                    <input type="text" class="form-control" id="numberphone" name="numberphone"
                      placeholder="Ingrese su numero de teléfono" Required>
                </div>

                <div class="form-group m-2">
                    <label for="email">Dirección de correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo electrónico"
                      Required>
                    <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo electrónico con nadie
                      más.</small>
                </div>

                <div class="form-group m-2">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Ingrese la constraseña" Required>
                </div>

                <div class="form-group m-2">
                    <label for="password2">Confirmar contraseña</label>
                    <input type="password" class="form-control" id="password2" name="password2"
                      placeholder="Ingrese la contraseña de nuevo" Required>
                </div>


                <div class="mt-4 m-2 d-flex justify-content-center">
                   <button type="submit" class="btn btn-lg btn-primary px-5">Registrarte</button>
                </div>


                <div class="d-flex justify-content-center form-margint">
                    <p>¿Usted tiene una cuenta? <a href="login.php">Iniciar sesión</a></p>
                </div>
        </form>

      </div>

    </div>

  </div>



</body>

</html>