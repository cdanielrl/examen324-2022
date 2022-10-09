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
    <a href="personas.php">
        <button class="button">Ver tabla persona</button>
    </a>
    <a href="inscripciones.php">
        <button class="button">Ver tabla inscripcion</button>
    </a>
    <a href="usuarios.php">
        <button class="button">Ver tabla usuarios</button>
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