<?php
namespace Academico;
?>
<html>
<head>
    <title>Acceso</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
use Inscripcion;
session_start();
if (! empty($_SESSION["userId"])) {
    require_once (__DIR__ . "./Inscripcion.php");
    $inscripcion = new Inscripcion();
    $lista = $inscripcion->listarInscripciones();
    ?>   
    <table>
        <tr>
            <thead>
            <th scope="col">C.I.</th>
            <th scope="col">Sigla</th>
            <th scope="col">Nota 1</th>
            <th scope="col">Nota 2</th>
            <th scope="col">Nota 3</th>
            <th scope="col">Nota Final</th>
</thead>
</tr>
    <?php
    if ($lista) {
        foreach ($lista as $row) {
            echo "<tr>
            <td>".$row['ci']."</td>
            <td>".$row['sigla']."</td>
            <td>".$row['nota1']."</td>
            <td>".$row['nota2']."</td>
            <td>".$row['nota3']."</td>
            <td>".$row['nota_final']."</td>
    </tr>";
        }
    } else {
        ?>  
        <tr>
            <td colspan="6">No hay datos</td>
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