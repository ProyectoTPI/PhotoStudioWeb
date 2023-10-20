<!doctype html>
<html lang="en">

<head>
  <title>Registro de citas</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

</head>

<body class="background mb-4">

    <div class="container container-custom">

      <div class="card">

        <div class="card-body">

          <div class="m-2 d-flex justify-content-center ">
              <h1 class="title">Registrar cita</h1>
          </div>
          <div class="m-2 d-flex justify-content-center">
             <p class="eslogan">¡Registra una cita para vivir "la experiencia" de los servicios de PhotoStudio!</p>
          </div>

          <form method="post" action="#" >

          <div class="row m-1">
                  <div class="form-group  col-4">
                      <label for="idappointment">Identificador de la cita</label>
                      <input type="text" class="form-control" id="idappointment" name="idappointment"
                        placeholder="Aqui va el identificador de la cita" Required readonly>
                  </div>

                  <div class="form-group  col-4">
                      <label for="idclient">Identificador del cliente</label>
                      <input type="text" class="form-control" id="idclient" name="idclient"
                        placeholder="Aqui va el identificador del cliente" Required readonly>
                  </div>

                  <div class="form-group col-4">
                      <label for="idpackage">Identificador del paquete</label>
                      <select class=" form-control" name="idpackage" id="idpackage" Required>
                        <option value="el mismo id del paquete package">prueba</option>
                        <option value="">prueba2 </option>
                        <option value="">prueba3</option>
                      </select>
                      <small id="optioHelp" class="form-text text-muted">Haga clic para seleccionar una opción</small>
                  </div>
              </div>

              <div class="row m-1">
                  <div class="form-group  col-4">
                      <label for="idemployee">Identificador del empleado</label>
                      <input type="text" class="form-control" id="idemployee" name="idemployee"
                        placeholder="Aqui va el identificador del empleado" Required readonly>
                  </div>

                  <div class="form-group  col-8">
                      <label for="employeename">Fotografo asignado</label>
                      <input type="text" class="form-control" id="employeename" name="employeename"
                        placeholder="Aqui va el nombre del empleado" Required readonly>
                  </div>                 
              </div>

              <div class="form-group m-3">
                <label for="username">Nombre de usuario</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Ingrese el nombre usuario" Required readonly>
              </div>

              <div class="form-group m-3">
                <label for="lastname">Apedillo del usuario</label>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Ingrese sus apellidos" Required readonly>
              </div>

              <div class="form-group m-3">
                <label for="numberphone">Número de teléfono</label>
                <input type="text" class="form-control" id="numberphone" name="numberphone" placeholder="Ingrese su numero de teléfono" Required readonly>
              </div>

              <div class="form-group m-3">
                <label for="email">Dirección de correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"
                  placeholder="Ingrese su correo electrónico" Required readonly>
                <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo electrónico con nadie
                  más.</small>
              </div>

              <div class="form-group m-3">
                <label for="address">Dirección</label>
                <input class="form-control" type="text" id="address" name="address" placeholder="Ingrese la dirección del evento o ubicación" Required>
              </div>
              
              <div class="row m-1">
                  <div class="form-group  col-4">
                      <label for="date">Fecha del evento</label>
                      <input type="date" class="form-control" id="date" name="date" Required>
                  </div>

                  <div class="form-group  col-4">
                      <label for="starttime">Hora de inicio del evento</label>
                      <input type="time" class="form-control" id="starttime" name="starttime" Required>
                  </div>

                  <div class="form-group col-4">
                      <label for="endtime">Hora de fin del evento</label>
                      <input type="time" class="form-control" id="endtime" name="endtime" Required>
                  </div>
              </div>
              
              <div class="form-group m-3">
                <label for="nameevent">Nombre del evento</label>
                <input type="text" class="form-control" id="nameevent" name="nameevent" placeholder="Ingrese una constraseña" Required>
              </div>

              <div class="form-group m-3">
                <label for="eventdetail">Detalle del evento</label>
                <textarea class="form-control" name="eventdetail" id="eventdetail" cols="142" rows="5" placeholder=" Ingrese todos los detalles que sienta necesario, con un limite de 200 caracteres"></textarea>      
              </div>


              <div class="mt-4 m-3 d-flex justify-content-center">
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