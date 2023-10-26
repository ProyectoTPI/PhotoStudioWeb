<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:PHOTOSTUDIOWEB - DIRECTORIO:.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>

<body>

    <?php include 'home.php'; ?>
    <?php include '../controllers/DirectoryController.php'; ?>

    <h2>Directorio de clientes</h2>

    <div class="table-container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo electrónico</th>
                    <th>Teléfono</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee) { ?>
                    <tr>
                        <td><?php echo $employee['nombre']; ?></td>
                        <td><?php echo $employee['apellido']; ?></td>
                        <td><?php echo $employee['email']; ?></td>
                        <td><?php echo $employee['telefono']; ?></td>
                        <td>

                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>

    <script src="./js/drawerClose.js"></script>
</body>

<script>
    window.addEventListener('load', function() {
        toggleSidebar();
    });
</script>


</html>