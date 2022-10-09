<?php
session_start();
if (! empty($_SESSION["userId"])) {
    require_once './acceso.php';
} else {
    require_once './login-form.php';
}
?>