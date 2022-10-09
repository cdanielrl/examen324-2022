<?php
require_once (__DIR__ . "./Db.php");
class Inscripcion {
function listarInscripciones() {
    $db=new Db();
    $mdb=$db->conectar();
    $sql = 'SELECT ci_estudiante, sigla, nota1, nota2, nota3, nota_final FROM inscripcion';
    $consulta = $mdb->prepare($sql);
    $consulta->execute();
    $resultado = $consulta->fetchAll();
    if($resultado) {
        return $resultado;
    }
    return false;
}
}
?>
