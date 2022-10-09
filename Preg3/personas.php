<?php
namespace Academico;
?>
<html>
<head>
    <title>Personas</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
use Persona;
session_start();
if (! empty($_SESSION["userId"])) {
    require_once (__DIR__ . "./Persona.php");
    $persona = new Persona();
    $lista = $persona->listarPersonas();
    ?>   
    <table>
        <tr>
            <thead>
            <th scope="col">C.I.</th>
            <th scope="col">Nombre Completo</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Departamento</th>
</thead>
</tr>
    <?php
    if ($lista) {
        foreach ($lista as $row) {
            echo "<tr>
            <td>".$row['ci']."</td>
            <td>".$row['nombre_completo']."</td>
            <td>".$row['fecha_de_nacimiento']."</td>
            <td>".$row['departamento']."</td>
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
    <?php
} else {
    require_once './login-form.php';
}
?>
</body>
</html>