<?php
class Db {
    private string  $usuario="academico";
    private string  $contraseña="123456";
function conectar() {
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=academicodanielramirez',  $this->usuario,  $this->contraseña);
        return $pdo;
    } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), (int)$e->getCode());
   }
}
}
?>