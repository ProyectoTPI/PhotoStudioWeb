<!DOCTYPE html>
<?php
session_start();
$lista=$_SESSION['lista'];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen de compras</title>
    <link rel="stylesheet" href="../views/css/style.css">
    <script>
        function ingresar(){
            location.href="./src/controllers/carritoController.php?op=1"
        }
    </script>

</head>
<body class="contenido">
<div id="container">
        <header>
            <h1>Royale Photo Studio</h1>
            <ul>
                <li><a href="../../index.php" >Inicio</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="./src/controllers/carritoController.php?op=1" class="active">Carrito(0) </a></li>
                
            </ul>
        </header>
    </div>
<div class="principal">
    <h2 class="tittle">Resumen de compra</h2>
    <h2 ></h2>
    <table class="detalles">
        <tr>
            <th class="ite">Item</th>
            <th>Nombre del paquete</td>
            <th>Imagen</th>
            <th class="duracion">Duracion</th>
            <th class="precio">Precio</th>
            <th class="accion">Accion</th>
        </tr>
        
           <?php
      $num=0;
      $monto=0;
         foreach($lista as $reg){
          $num++;
          $monto=$reg['precio']+$monto;
         
    switch($reg['paquete_id']){
        case '1':
            $foto="../../src/views/img/pregnant_photo.jpg";
            break;
            case "2":
                $foto= "../../src/views/img/family_photo.jpg";
                break;
                case "3":
                    $foto= "../../src/views/img/individual_photo.jpg";
                    break;
                    case "4":
                       $foto= "../../src/views/img/beach_photo.jpg";
                       break;
                       case "5":
                        $foto= "../../src/views/img/professional_photo.jpg";
                       }

          ?>
          
         <tr>
           <td class="ite"><?php echo $num ?></td>
           <td><?php echo $reg['nombre_comercial']; ?></td>
           <td><img class="imgResumen" src=" <?php echo $foto ?>" alt="Foto"></td>
            <td class ="duracion"><?php echo $reg['duracion']; ?></td>
            <td class="precio"><?php echo '$'. $reg['precio']; ?></td>
            <form action="../controllers/carritoController.php?op=2" method="post">
            <td class="accion"><input type="submit" name="btnEliminar" id="btnEliminar" value="Eliminar"></td>
            </form>
         </tr>
       <?php
         }
       ?>
        
    </table>
    <div class="inline">
    <h1 class="monto">Total a pagar </h1>
    <h1 class="monto"> <?php  echo '$ '. number_format($monto,2) ?></h1>
    </div>
    </div>


    
    <!--Esto es lo que ya está sobre paypal-->
    <div class="pay">
    <div id="paypal-button-container"></div>
    <p id="result-message"></p>
    <script src="https://www.paypal.com/sdk/js?client-id=AekIt_oBmEwI3_VpKUkZj1InGlqq8cWuGdRrfynoSqHCN_cO4G2zFoau4b_nyYpAkIVXFFlwvDTQ6rTX&currency=USD"></script>
    <script src="app.js"></script>
    <script>
        paypal.Buttons({
            style: {
                color: 'blue',
                shape: 'pill',
                label: 'pay',
            },
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value:  '<?php echo $monto; ?>'
                        }
                    }]
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function (detalles) {
                    console.log(detalles);
                    alert("Pago realizado");
                });
            },
            onCancel: function(data) {
                alert("Pago cancelado");
                console.log(data);
            }
        }).render('#paypal-button-container');
    </script>
</div>
</body>
</html>
