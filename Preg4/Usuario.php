<?php
require_once (__DIR__ . "./Db.php");
class Usuario {
function procesarLogin($username,$password) {
    $db=new Db();
    $mdb=$db->conectar();
    $sql = 'SELECT ci from usuarios where usuario=? and sha2(?,224)=`password`';
    $consulta = $mdb->prepare($sql);
    $consulta->execute([$username,$password]);
    $resultado = $consulta->fetch();
    if($resultado) {
        return true;
    } else {
        return false;
    }
}
function getUsuarioPersona($username) {
    $db=new Db();
    $mdb=$db->conectar();
    $sql = 'SELECT usuario,ci,rol,nombre_completo from usuarios where usuario=?';
    $consulta = $mdb->prepare($sql);
    $consulta->execute([$username]);
    $resultado = $consulta->fetch();
    return $resultado;
}
function listarUsuarios() {
    $db=new Db();
    $mdb=$db->conectar();
    $sql = 'SELECT ci, usuario, `password`, rol FROM usuarios';
    $consulta = $mdb->prepare($sql);
    $consulta->execute();
    $resultado = $consulta->fetchAll();
    if($resultado) {
        return $resultado;
    }
    return false;
}
function getRolUsuario($username) {
    $db=new Db();
    $mdb=$db->conectar();
    $sql = 'SELECT rol from usuarios where usuario=?';
    $consulta = $mdb->prepare($sql);
    $consulta->execute([$username]);
    $resultado = $consulta->fetch();
    return $resultado;
}
}
?>