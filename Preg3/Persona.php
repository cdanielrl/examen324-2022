<?php
require_once (__DIR__ . "./Db.php");
class Persona {
function listarPersonas() {
    $db=new Db();
    $mdb=$db->conectar();
    $sql = 'SELECT ci,nombre_completo,fecha_de_nacimiento,departamento from persona';
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
