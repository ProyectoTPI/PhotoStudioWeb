<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royale Photo Studio</title>
    <link rel="icon" type="image/png" href="src/views/img/cmera logo.png"/>
    <link rel="stylesheet" href="src/views/css/style.css">
</head>

<body>
    <div id="paypal-button-container"></div>
    <p id="result-message"></p>
    <a href="src/controllers/LoginController.php">Login form</a>

    <div id="container">
        <header>
            <h1>Royale Photo Studio</h1>
            <ul>
                <li><a href="#">INICIAR SESIÓN</a></li>
                <li><a href="#" class="active">Inicio</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Carrito</a></li>
            </ul>
        </header>

        <div id="sidebar">
            <ul>
                <li><a href="#" class="active">Sesiones</a></li>
                <li><a href="#">Paquetes</a></li>
                <li><a href="#">Sobre Nosotros</a></li>
            </ul>
        </div>

        <div id="section-container">
            <div id="photo-container" class="active"></div>
            <div id="package-container">
                <div class="package">
                    <figure>
                        <img src="src/views/img/pregnant_photo.jpg" alt="Paquete 1">
                    </figure>
                    <div class="package-info">
                        <h2>Paquete Embarazo</h2>
                        <p id="package-description">Captura las emociones de este momento único e irrepetible que te permitira volverlas a revivir en un futuro junto a tu familia</p>
                        <p id="package-price">1</p>
                        <button>Añadir al carrito</button>
                    </div>
                </div>
                <div class="package">
                    <figure>
                        <img src="src/views/img/family_photo.jpg" alt="Paquete 2">
                    </figure>
                    <div class="package-info">
                        <h2>Paquete Familia</h2>
                        <p id="package-description">Se realiza al aire libre. Es ideal para todo el grupo familia y asi crear un hermoso recuerdo donde cada uno es protagonista</p>
                        <p id="package-price">$65</p>
                        <button>Añadir al carrito</button>
                    </div>
                </div>
                <div class="package">
                    <figure>
                        <img src="src/views/img/beach_photo.jpg" alt="Paquete 3">
                    </figure>
                    <div class="package-info">
                        <h2>Paquete Playa</h2>
                        <p id="package-description">Captura momentos maravillosos e inolvidables junto a las olas, el sonido relajante del mar y el hermoso atardecer</p>
                        <p id="package-price">$40</p>
                        <button>Añadir al carrito</button>
                    </div>
                </div>
                <div class="package">
                    <figure>
                        <img src="src/views/img/individual_photo.jpg" alt="Paquete 4">
                    </figure>
                    <div class="package-info">
                        <h2>Paquete Individual</h2>
                        <p id="package-description">Ideal para sesiones de fotos de modelaje profesional donde se brinda orientación para las poses</p>
                        <p id="package-price">$40</p>
                        <button>Añadir al carrito</button>
                    </div>
                </div>
                <div class="package">
                    <figure>
                        <img src="src/views/img/professional_photo.jpg" alt="Paquete 5">
                    </figure>
                    <div class="package-info">
                        <h2>Paquete profesional</h2>
                        <p id="package-description">Se realiza de manera individual dentro del estudio con fondo blanco y negro ideal para diplomas, titulos, LinkedIn, ect...</p>
                        <p id="package-price">$40</p>
                        <button>Añadir al carrito</button>
                    </div>
                </div>
            </div>
            <div id="about-container">
                <h1>Señor xD</h1>
            </div>
        </div>   
    </div>

    <footer>© 2020 Royale Photo Studio</footer>

    <script src="public/js/script.js"></script>

    <form id="paypal-form" action="src/controllers/TransactionController.php" method="post">
        <input type="hidden" name="name" id="package-input" value="">
        <input type="hidden" name="price" id="price-input" value="">
        <input type="hidden" name="transaction" id="transaction-input" value="">
    </form>

    <a href="./src/views/AppointmentRegistration.php">a</a>
    <a href="./src/views/RegisterUser.php">regis</a>

    <script src="https://www.paypal.com/sdk/js?client-id=AekIt_oBmEwI3_VpKUkZj1InGlqq8cWuGdRrfynoSqHCN_cO4G2zFoau4b_nyYpAkIVXFFlwvDTQ6rTX&currency=USD"></script>
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
                            value: pkgPrice
                        }
                    }]
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function (detalles) {

                    let data = JSON.stringify(detalles)
                    pkgNameInput.value = pkgName;
                    pkgPriceInput.value = pkgPrice;
                    pkgTransactionInput.value = data;
                    form.submit()

                    alert("Pago realizado");
                });
            },
            onCancel: function(detalles) {
                alert("Pago cancelado");
                console.log(detalles);
            }
        }).render('#paypal-button-container');
    </script>

</body>

</html>