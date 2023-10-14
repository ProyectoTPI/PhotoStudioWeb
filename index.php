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