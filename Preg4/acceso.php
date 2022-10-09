<html>
<head>
    <title>Acceso</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
session_start();
if (! empty($_SESSION["userId"])) {
    ?>
    <a href="promedio.php">
        <button class="button">Ver promedio de notas por departamento</button>
    </a>
    <a href="logout.php">
        <button class="button">
            Salir
        </button>
    </a>
    <?php
} else {
    require_once './login-form.php';
}
?>
</body>
</html>