<!doctype html>
<html lang="en">

<head>
  <title>Registro de citas</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

</head>

<body class="background mb-4">

  <div class="container container-custom">

    <div class="card">

      <div class="card-body">

        <div class="mt-5 d-flex justify-content-center ">
          <h1 class="title">Registrar cita</h1>
        </div>
        <div class="m-2 d-flex justify-content-center">
          <p class="eslogan">¡Registra una cita para vivir "la experiencia" de los servicios de PhotoStudio!</p>
        </div>

        <form class="form-margin2" action="AppointmentController.php" method="POST">

          <div class="row">
            <div class="form-group col-md-4 col-form-label">
              <label for="idappointment">ID de la cita</label>
              <!--<input type="text" class="form-control" id="idappointment" name="idappointment"
                        placeholder="Aqui va el identificador de la cita" Required readonly>-->
              <input type="text" class="form-control" id="idappointment" name="idappointment" placeholder="Aqui va el identificador de la cita" Required readonly>
              <small id="Help" class="form-text text-muted">ID significa identificador</small>
            </div>

            <div class="form-group  col-md-4 col-form-label">
              <label for="idclient">ID del cliente</label>
              <!--<input type="text" class="form-control" id="idclient" name="idclient"
                        placeholder="Aqui va el identificador del cliente" Required readonly>-->

              <input type="text" class="form-control" id="idclient" name="idclient" value="<?= isset($client_data['cliente_id']) ? $client_data['cliente_id'] : '' ?>" required readonly>
            </div>

            <div class="form-group col-md-4 col-form-label">
              <label for="idpackage">ID del paquete</label>
              <select class=" form-control" name="idpackage" id="idpackage">
                <option value="1" <?= isset($paquete_id) && $paquete_id == 1 ? 'selected' : '' ?>>Paquete 1</option>
                <option value="2" <?= isset($paquete_id) && $paquete_id == 2 ? 'selected' : '' ?>>Paquete 2</option>
                <option value="3" <?= isset($paquete_id) && $paquete_id == 3 ? 'selected' : '' ?>>Paquete 3</option>
              </select>
              <small id="optionHelp" class="form-text text-muted">Haga clic para seleccionar una opción</small>
            </div>
          </div>

          <div class="row">
            <div class="form-group  col-md-4 col-form-label">
              <label for="idemployee">ID del empleado</label>
              <input type="text" class="form-control" id="idemployee" name="idemployee" value="" required readonly>
            </div>

            <div class="form-group  col-md-8 col-form-label">
              <label for="employeename">Fotografo asignado</label>
              <input type="text" class="form-control" id="employeename" name="employeename" placeholder="Aqui va el nombre del empleado" Required readonly>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6 col-form-label">
              <label for="username">Nombre de usuario</label>
              <input type="text" class="form-control" name="username" id="username" value="<?= isset($client_data['nombre']) ? $client_data['nombre'] : '' ?>" required readonly>
            </div>

            <div class="form-group col-md-6 col-form-label">
              <label for="lastname">Apellidos del usuario</label>
              <input type="text" class="form-control" name="lastname" id="lastname" value="<?= isset($client_data['apellido']) ? $client_data['apellido'] : '' ?>" required readonly>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-md-6 col-form-label">
              <label for="numberphone">Número de teléfono</label>
              <input type="text" class="form-control" id="numberphone" name="numberphone" value="<?= isset($client_data['telefono']) ? $client_data['telefono'] : '' ?>" required readonly>
            </div>

            <div class="form-group col-md-6 col-form-label">
              <label for="email">Dirección de correo electrónico</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?= isset($client_data['email']) ? $client_data['email'] : '' ?>" required readonly>
            </div>
          </div>


          <div class="form-group col-form-label">
            <label for="address">Dirección</label>
            <input class="form-control" type="text" id="address" name="address" placeholder="Ingrese la dirección del evento o ubicación" Required>
          </div>

          <div class="row label-size">
            <div class="form-group  col-sm-4 col-form-label">
              <label for="date">Fecha del evento</label>
              <input type="date" class="form-control" id="date" name="date" Required>
            </div>

            <div class="form-group  col-sm-4 col-form-label">
              <label for="starttime">Hora de inicio del evento</label>
              <input type="time" class="form-control" id="starttime" name="starttime" Required>
            </div>

            <div class="form-group col-sm-4 col-form-label">
              <label for="endtime">Hora de fin del evento</label>
              <input type="time" class="form-control" id="endtime" name="endtime" Required>
            </div>
          </div>

          <div class="form-group col-form-label">
            <label for="nameevent">Nombre del evento</label>
            <input type="text" class="form-control" id="nameevent" name="nameevent" placeholder="Ingrese una constraseña" Required>
          </div>

          <div class="form-group col-form-label">
            <label for="eventdetail">Detalle del evento</label>
            <textarea class="form-control" name="eventdetail" id="eventdetail" cols="142" rows="5" placeholder="Ingrese todos los detalles que sienta necesario, con un limite de 200 caracteres"></textarea>
          </div>


          <div class="mt-4 d-flex justify-content-center">
            <button type="submit" class="btn btn-lg btn-primary px-5">Registrar Cita</button>
          </div>


          <div class="d-flex justify-content-center form-margint">
            <p>¿Desea regresar al resumen de compras? <a href="ResumenCompras.php">Volver</a></p>
          </div>

        </form>

      </div>

    </div>

  </div>

</body>

</html>