<?php 
    session_start(); 

    if (!isset($_SESSION['validarIngreso'])) {

        echo '<script>window.location="login.php";</script>';
        return;
    } else {
        if ($_SESSION['validarIngreso'] != "ok") {

            echo '<script>window.location="login.php";</script>';
            return;
        }
    }
?>

INGRESO A RUTAS
