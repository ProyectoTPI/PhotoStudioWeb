
<?php

session_start();

if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'cliente') {
    header('Location: pagina_de_error.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My PHP App</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
        </ul>
    </nav>
</header>
<main>
</main>
<footer>
    <p>&copy; 2021 My PHP App</p>
</footer>
<script src="/js/script.js"></script>
</body>
</html>