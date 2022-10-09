<?php
namespace Academico;

use Usuario;
if (! empty($_POST["login"])) {
    session_start();
    $username = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    require_once (__DIR__ . "./Usuario.php");
    
    $usuario = new Usuario();
    $aut = $usuario->procesarLogin($username, $password);
    if (! $aut) {
        $_SESSION["errorMessage"] = "Usuario o contrase&ntilde;a no v&aacute;lidos";
    } else {
        $_SESSION["userId"] = $username;        
    }
    header("Location: ./index.php");
    exit();
}
?>