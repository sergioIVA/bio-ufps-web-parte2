
<?php

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$cedula = $_POST['cedula'];
$correo = $_POST['correo'];




if (!empty($usuario) && !empty($clave) && !empty($nombre) && !empty($cedula) && !empty($correo)) {

    include '../../logica/controladores/ControladorAdministrador.php';
    $controlador = new ControladorAdministrador();

    $verificarC = $controlador->verificarExisteCedulaAdministrador($cedula);


    if (mysqli_num_rows($verificarC) > 0) {

        echo "3";
    } else {
        $result = $controlador->agregarAdministrador($usuario, $clave, $nombre, $cedula, $correo);


        if ($result) {

            echo "0";
        } else {
            echo "1";
        }
    }
} else {


    echo "2";
}
?>
  