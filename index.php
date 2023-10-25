<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royale Photo Studio</title>
    <link rel="icon" type="image/png" href="src/views/img/cmera logo.png" />
    <link rel="stylesheet" href="src/views/css/style.css">
</head>

<body>
    <div id="paypal-button-container"></div>
    <p id="result-message"></p>

    <div id="container">
        <header>
            <h1>Royale Photo Studio</h1>
            <ul>
                <li><a href="src/views/login.php">INICIAR SESIÓN</a></li>
                <li><a href="index.php" class="active">Inicio</a></li>

                <li><a href="./src/controllers/CarritoController.php?op=1">Carrito</a></li>
            </ul>
        </header>

        <div id="sidebar">
            <ul>
                <li><a href="#" class="active" data-content="photo-container">Sesiones</a></li>
                <li><a href="#" data-content="package-container">Paquetes</a></li>
                <li><a href="#" data-content="about-container">Sobre Nosotros</a></li>
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
                <h2>Sobre Nosotros</h2>
                <p>En Royale Photo Studio, estamos comprometidos a capturar los momentos más especiales de tu vida y convertirlos en recuerdos que atesorarás para siempre. Nuestro equipo de fotógrafos profesionales está dedicado a brindarte la mejor experiencia y a capturar la esencia de cada momento.</p>
                <p>Con más de 10 años de experiencia, hemos trabajado con innumerables clientes para crear imágenes asombrosas que cuentan historias. Ya sea una sesión de fotos en familia, una sesión de retratos individuales o una sesión en la playa, estamos listos para ayudarte a crear recuerdos duraderos.</p>

                <!-- Agregamos una imagen de un fotógrafo en acción -->
                <img src="src/views/img/photographer.jpg" alt="Fotógrafo en acción">

                <h3>Nuestra Pasión</h3>
                <p>La fotografía es nuestra pasión y creemos que cada foto cuenta una historia única. Nos esforzamos por capturar la esencia y la emoción en cada imagen que tomamos. Cada disparo es una oportunidad para crear recuerdos perdurables.</p>

                <h3>Lo Que Ofrecemos</h3>
                <p>En Royale Photo Studio, ofrecemos una variedad de servicios de fotografía para satisfacer tus necesidades. Ya sea que estés buscando un retrato familiar, una sesión de embarazo o un retrato profesional, estamos aquí para ayudarte a crear imágenes asombrosas.</p>

                <!-- Agregamos una galería de ejemplos de trabajo -->
                <div class="gallery">
                    <img src="src/views/img/gallery1.jpg" alt="Ejemplo de trabajo 1">
                    <img src="src/views/img/gallery2.jpg" alt="Ejemplo de trabajo 2">
                    <img src="src/views/img/gallery3.jpg" alt="Ejemplo de trabajo 3">
                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>