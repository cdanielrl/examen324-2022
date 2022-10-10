<?php

$method = strtolower($_SERVER['REQUEST_METHOD']);

$data = $_REQUEST;

if ($method == 'get') {
  get($data);
} else if ($method == 'post') {
  post($data);
} else if ($method == 'put') {
  parse_str($data,$data);
  put($data);
} 

function get($data) {
  require_once (__DIR__ . "./Db.php");
  $sql="";
  if(isset($data['ci'])) {
    $sql = 'SELECT * from persona where ci=?';
  } else {
    $sql = 'SELECT * from persona';
  }
  $db=new Db();
  $mdb=$db->conectar();
  $consulta = $mdb->prepare($sql);
  if(isset($data['ci'])) {
    $consulta->execute([$data['ci']]);
  } else {
    $consulta->execute();
  }
  $resultado = $consulta->fetch();
  if($resultado) {
    http_response_code(200);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($resultado);
  } else {
    http_response_code(404);
  }
}
function put($data) {
  require_once (__DIR__ . "./Db.php");
  if(isset($data['ci']) && isset($data['nombre_completo']) && isset($data['fecha_de_nacimiento']) && isset($data['departamento']) ) {
    $sql = 'SELECT * from persona where ci=?';
    $db=new Db();
    $mdb=$db->conectar();
    $consulta = $mdb->prepare($sql);
    $consulta->execute([$data['ci']]);
    $resultado = $consulta->fetch();
    if($resultado) {
      $sql = 'UPDATE persona SET nombre_completo=?,fecha_de_nacimiento=?,departamento=? where ci=?';
      $consulta = $mdb->prepare($sql);
      $consulta->execute([$data['nombre_completo'],$data['fecha_de_nacimiento'],$data['departamento'],$data['ci']]);
      http_response_code(200);
      header('Content-Type: application/json; charset=utf-8');
      echo json_encode($resultado);
    } else {
      http_response_code(404);
    }
  }
}
function post($data) {
  require_once (__DIR__ . "./Db.php");
  if(isset($data['ci']) && isset($data['nombre_completo']) && isset($data['fecha_de_nacimiento']) && isset($data['departamento']) ) {
    $sql = 'INSERT INTO persona (ci,nombre_completo,fecha_de_nacimiento,departamento) values (?,?,?,?)';
    $db=new Db();
    $mdb=$db->conectar();
    $consulta = $mdb->prepare($sql);
    $consulta->execute([$data['ci'],$data['nombre_completo'],$data['fecha_de_nacimiento'],$data['departamento']]);
    http_response_code(200);
  } else {
    http_response_code(500);
  }
}
?>