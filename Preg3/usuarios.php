<?php
namespace Academico;
?>
<html>
<head>
    <title>Usurios</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
use Usuario;
session_start();
if (! empty($_SESSION["userId"])) {
    require_once (__DIR__ . "./Usuario.php");
    $usuario = new Usuario();
    $lista = $usuario->listarUsuarios();
    ?>   
    <table>
        <tr>
            <thead>
            <th scope="col">C.I.</th>
            <th scope="col">Nombre de usuario</th>
            <th scope="col">Rol</th>
            <th scope="col">Hash</th>
</thead>
</tr>
    <?php
    if ($lista) {
        foreach ($lista as $row) {
            echo "<tr>
            <td>".$row['ci']."</td>
            <td>".$row['usuario']."</td>
            <td>".$row['rol']."</td>
            <td>".$row['password']."</td>
    </tr>";
        }
    } else {
        ?>  
        <tr>
            <td colspan="4">No hay datos</td>
    </tr>
        <?php
    }
    ?>    
    </table>
    <a href="acceso.php">
        <button class="button">
            Volver
        </button>
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