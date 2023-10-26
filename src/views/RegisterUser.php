<!doctype html>
<html lang="en">

<head>
  <title>Registrar Usuario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="background">
  <div class="container container-custom">
    <div class="card">
      <div class="card-body m-3">
        <div class="m-2 d-flex justify-content-center ">
          <h1 class="title">Royale Photo Studio</h1>
        </div>
        <div class="m-2 d-flex justify-content-center">
          <p class="eslogan">¡Resgistrate para vivir la experiencia con Royale Photo Studio!</p>
        </div>
        <form action="/src/controllers/RegController.php" method="post">


        <div class="row m-lg-1">
         <div class="form-group col-md-6 col-form-label">
            <label for="name">Nombres</label>
            <input type="name" class="form-control" name="name" id="name" placeholder="Ingrese su nombre completo" Required>
            <small id="usernameHelp" class="form-text text-muted">Algunos ejemplos son: Juan Jose, Alex Antonio, etc.</small>
          </div>
        
           <div class="form-group col-md-6 col-form-label">
            <label for="lastname">Apellidos</label>
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Ingrese sus apellidos" Required>
            <small id="lastnameHelp" class="form-text text-muted">Algunos ejemplos son: Rodríguez, González, etc.</small>
          </div>
        </div>

        <div class="row m-lg-1">
          <div class="form-group col-md-6 col-form-label">
              <label for="dui">DUI</label>
              <input type="text" class="form-control" id="dui" name="dui" placeholder="Ingrese su numero de Documento Único de Identidad" Required>
            </div>
            <div class="form-group col-md-6 col-form-label">
              <label for="numberphone">Teléfono</label>
              <input type="text" class="form-control" id="telefono" name="numberphone" placeholder="Ingrese su numero de teléfono" Required>
            </div>
        </div>

        <div class="row m-lg-1">
          <div class="form-group col-lg-6  col-form-label">
              <label for="username">Nombre de usuario</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Ingrese el nombre de usuario" required>
              <small id="usernameHelp" class="form-text text-muted">Algunos ejemplos son: lmerino, luis.merino etc.</small>
            </div>
            
            <div class="form-group col-lg-6 col-form-label">
              <label for="email">Dirección de correo electrónico</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo electrónico" Required>
              <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo electrónico con nadie
                más.</small>
            </div>
        </div>
        
        <div class="row m-lg-1">
          <div class="form-group col-lg-6 col-form-label">
              <label for="password">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese la contraseña" Required>
            </div>
            <div class="form-group col-lg-6 col-form-label">
              <label for="password2">Confirmar contraseña</label>
              <input type="password" class="form-control" id="password2" name="password2" placeholder="Ingrese la contraseña de nuevo" Required>
            </div> 
        </div>

        <div class="m-lg-3">
          <div class="form-margint d-flex justify-content-center">
            <button type="submit" class="btn btn-lg px-5" id="registerUser">Registrate</button>
          </div>
        </div>  
         

          <div class="d-flex justify-content-center form-margint">
            <p>¿Usted tiene una cuenta? <a href="login.php" class="signUp">Iniciar sesión</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>