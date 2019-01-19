<?php

$email = $_POST['correo'];

if (empty($email)) {

    echo "¡Debes ingresar un correo!";
   
}
else{
include '../../logica/controladores/ControladorAdministrador.php';
$controlador = new ControladorAdministrador();
$result = $controlador->consultarCorreo($email);

if (mysqli_num_rows($result) == 0) {
    echo "¡Este correo no esta asociado a una cuenta ....verifique!";
    
}
else{
  

$r=mysqli_fetch_array($result);
$clave=$r['clave'];

$para      = $email;
$titulo    = 'Recuperacion de contraseña';
$mensaje   = 'Usted pidio recuperar la contraseña,la contraseña es :'.$clave.'';
$cabeceras = 'From: sertioivan02@gmail.com' . "\r\n" .
    'Reply-To: sertioivan02@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();;

mail($para, $titulo, $mensaje, $cabeceras);
echo "envio el mensaje";

}

}
?>