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
        <p id="package-price">1</p>

    <form id="paypal-form" action="src/controllers/PaypalController.php" method="post">
        <input type="hidden" name="name" id="package-input" value="">
        <input type="hidden" name="price" id="price-input" value="">
        <!-- <input type="hidden" name="concept" id="concept-input" value=""> -->
        <input type="hidden" name="transaction" id="transaction-input" value="">
    </form>

    <script src="https://www.paypal.com/sdk/js?client-id=AekIt_oBmEwI3_VpKUkZj1InGlqq8cWuGdRrfynoSqHCN_cO4G2zFoau4b_nyYpAkIVXFFlwvDTQ6rTX&currency=USD"></script>
    <script>

        // Form values injection
        let form = document.getElementById("paypal-form");
        let pkgName = document.getElementById("package-description").innerHTML;
        let pkgPrice = document.getElementById("package-price").innerHTML;
        // let pkgConcept = document.getElementById("concept-price").innerHTML;

        let pkgNameInput = document.getElementById("package-input");
        let pkgPriceInput = document.getElementById("price-input");
        // let pkgConceptInput = document.getElementById("concept-input");
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