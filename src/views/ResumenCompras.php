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
            <th type="hidden">Concepto</th>
            <th class="accion">Accion</th>
        </tr>
        
           <?php
      $num=0;
      $monto=0;
         foreach($lista as $reg){
          $num++;
          $monto=$reg['precio']+$monto;
         
          //Tnemos la imagen para los 5 paquetes si el paquete es nuevo aparece una imagen predeterminada
    switch($reg['nombre_comercial']){
        case 'SESION FAMILIAR':
            $foto="../../src/views/img/family_photo.jpg";
            break;
            case 'SESION INDIVIDUAL':
                $foto= "../../src/views/img/individual_photo.jpg";
                break;
                case 'SESION EMBARAZO':
                    $foto= "../../src/views/img/pregnant_photo.jpg";
                    break;
                    case "SESION PLAYA":
                       $foto= "../../src/views/img/beach_photo.jpg";
                       break;
                       case "SESION PROFESIONAL":
                        $foto= "../../src/views/img/professional_photo.jpg";
                        break;
                        default:
                        $foto= "../../src/views/img/default.jpg";
                        break;

                       }
                       
          ?>
          
         <tr>
           <td class="ite"><?php echo $num ?></td>
           <td><?php echo $reg['nombre_comercial']; ?></td>
           <td><img class="imgResumen" src=" <?php echo $foto ?>" alt="Foto"></td>
            <td class ="duracion"><?php echo $reg['duracion']; ?></td>
            <td class="precio" id="package-price"><?php echo '$'. $reg['precio']; ?></td>
            <td type="hidden" id="package-description"><?php echo $reg['concepto']; ?></td>
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
    <div  class="pay" id="paypal-button-container"></div>
    <p id="result-message"></p> 
    </div>


    <script src="public/js/script.js"></script>
    
    <!--Esto es lo que ya está sobre paypal-->
    <form id="paypal-form" action="../../src/controllers/TransactionController.php" method="post">
        <input type="hidden" name="name" id="package-input" value="">
        <input type="hidden" name="price" id="price-input" value="">
        <input type="hidden" name="transaction" id="transaction-input" value="">
    </form>

    <a href="AppointmentRegistration.php">a</a>
    <a href="RegisterUser.php">regis</a>

    <script src="https://www.paypal.com/sdk/js?client-id=AekIt_oBmEwI3_VpKUkZj1InGlqq8cWuGdRrfynoSqHCN_cO4G2zFoau4b_nyYpAkIVXFFlwvDTQ6rTX&currency=USD"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Form values injection
        let form = document.getElementById("paypal-form");
        let pkgName = document.getElementById("package-description").innerHTML;
        let pkgPrice = document.getElementById("package-price").innerHTML;
        let pkgNameInput = document.getElementById("package-input");
        let pkgPriceInput = document.getElementById("price-input");
        let pkgTransactionInput = document.getElementById("transaction-input");

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
                            value: '<?php echo $monto?>'
                        }
                    }]
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function(detalles) {

                    let data = JSON.stringify(detalles)
                    pkgNameInput.value = pkgName;
                    pkgPriceInput.value = pkgPrice;
                    pkgTransactionInput.value = data;
                    form.submit()

                    //alert("Pago realizado");
                    Swal.fire({
                        title: 'Pago realizado',
                        text: 'Su pago ha sido procesado con éxito.',
                        icon: 'success',
                        timer: 4000, 
                        showConfirmButton: false // Esto oculta el botón "OK"
                    });
                });
            },
            onCancel: function(detalles) {
                //alert("Pago cancelado");
                console.log(detalles);
                Swal.fire({
                    icon: 'warning',
                    title: 'Su pago ha sido cancelado!',
                })
            }
        }).render('#paypal-button-container');
    </script>
</body>
</html>
