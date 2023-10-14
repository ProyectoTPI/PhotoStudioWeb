<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div id="paypal-button-container"></div>
    <p id="result-message"></p>
    <a href="src/controllers/LoginController.php">Login form</a>

    <h1> Package </h1>
        <p id="package-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, adipisci? Impedit nesciunt architecto molestiae ab, quos incidunt itaque. Necessitatibus, ea blanditiis voluptate velit beatae id officiis quia delectus eum odio!</p>

    <h1> Price </h1>
        <p id="package-price">10.50</p>

    <form id="paypal-form" action="#" method="post">
        <input type="hidden" name="package" id="package-input" value="">
        <input type="hidden" name="price" id="price-input" value="">
    </form>

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
                            value: '100'
                        }
                    }]
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function (detalles) {
                    let form = document.getElementById("paypal-form");
                    let pkgName = document.getElementById("package-description").value;
                    let pkgPrice = document.getElementById("package-price").value;

                    let pkgNameInput = document.getElementById("package-input");
                    let pkgPriceInput = document.getElementById("price-input");

                    let data = JSON.stringify(detalles)
                    pkgNameInput.value = pkgName;
                    pkgPriceInput.value = pkgPrice;
                    form.submit()

                    console.log(pkgName)
                    console.log(pkgPrice)
                    console.log(data)
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

</body>

</html>