<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:PHOTOSTUDIOWEB - EMPLOYEES:.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>

<body>

    <?php include 'home.php'; ?>
    <h2>Mantenimiento de empleados</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>DUI</th>
                <th>Teléfono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Juan</td>
                <td>Pérez</td>
                <td>juan@example.com</td>
                <td>12345678-9</td>
                <td>123-456-7890</td>
                <td>
                    <button class="btn btn-primary">Editar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            <tr>
                <td>María</td>
                <td>González</td>
                <td>maria@example.com</td>
                <td>98765432-1</td>
                <td>987-654-3210</td>
                <td>
                    <button class="btn btn-primary">Editar</button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>

        </tbody>
    </table>
    <button class="btn btn-primary" id="agregarEmpleado">Agregar Empleado</button>
    <script src="./js/drawerClose.js"></script>
</body>

<div class="modal fade" id="agregarEmpleadoModal" tabindex="-1" role="dialog" aria-labelledby="agregarEmpleadoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="/src/controllers/RegEmployeeController.php" method="post">
                <div class="form-group m-2">
                    <label for="name">Nombre:</label>
                    <input type="name" class="form-control" name="name" id="name" placeholder="Nombre(s) del empleado" Required>

                </div>
                <div class="form-group m-2">
                    <label for="lastname">Apellido:</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Apellido(s) del empleado" Required>
                </div>
                <div class="form-group m-2">
                    <label for="username">Usuario:</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Ejm: lmerino, luis.merino" required>
                </div>
                <div class="form-group m-2">
                    <label for="dui">DUI:</label>
                    <input type="text" class="form-control" id="dui" name="dui" placeholder="Digite el # de DUI del empleado" Required>
                </div>
                <div class="form-group m-2">
                    <label for="numberphone">Teléfono</label>
                    <input type="text" class="form-control" id="telefono" name="numberphone" placeholder="Digite el # de teléfono del empleado" Required>
                </div>
                <div class="form-group m-2">
                    <label for="email">Dirección de correo electrónico</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email del empleado" Required>
                </div>
                <div class="form-group m-2">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese la contraseña para el usuario" Required>
                </div>
                <div class="mt-4 m-2 d-flex justify-content-center">
                    <button type="submit" class="btn btn-lg btn-primary px-5">Crear usuario</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="editarEmpleadoModal" tabindex="-1" role="dialog" aria-labelledby="editarEmpleadoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Contenido del modal para editar empleado -->
        </div>
    </div>
</div>

<div class="modal fade" id="eliminarEmpleadoModal" tabindex="-1" role="dialog" aria-labelledby="eliminarEmpleadoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Contenido del modal para confirmar eliminación de empleado -->
        </div>
    </div>
</div>
<script>
    window.addEventListener('load', function() {
        toggleSidebar();
    });
</script>
<script src="./js/modalsEmployees.js"></script>

</html>