<?php

include '../../logica/controladores/ControladorAdministrador.php';
$controlador = new ControladorAdministrador();
$res = $controlador->borrarHistorial();

if ($res) {

    header('location:Historial.php');
} else {
    echo "no se elimino el historial";
}
?>