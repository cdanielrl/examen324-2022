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
use Inscripcion;
session_start();
if (! empty($_SESSION["userId"])) {
    require_once (__DIR__ . "./Inscripcion.php");
    $inscripcion = new Inscripcion();
    $lista = $inscripcion->listarInscripcionesporDepartamento();
    ?>   
    <table>
        <tr>
            <thead>
            <th scope="col">Departamento</th>
            <th scope="col">Nota promedio</th>
</thead>
</tr>
    <?php
    if ($lista) {
        foreach ($lista as $departamento => $list_data ) {
            echo "<tr>
            <td>".$departamento."</td>";
            $s=0;
            $c=0;
            foreach ($list_data  as $row) {
            $s+=$row['nota1']+$row['nota2']+$row['nota3']+$row['nota_final'];
            $c++;
            }
            $promedio=$s/$c;
            echo "<td>".$promedio."</td>
            </tr>";
        }
    } else {
        ?>  
        <tr>
            <td colspan="2">No hay datos</td>
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