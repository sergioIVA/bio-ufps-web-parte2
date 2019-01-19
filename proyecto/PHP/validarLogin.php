<?php

$user = $_POST['usuario'];
$clave = $_POST['clave'];

include '../../logica/controladores/ControladorAdministrador.php';


$controlador = new ControladorAdministrador();
$result = $controlador->login($user);

    if(empty($user)||empty($clave)){
        echo "3";
        return;
    }

    if (mysqli_num_rows($result) == 0) {
    echo "1";
     return;
     }

    $r = mysqli_fetch_array($result);
    if (mysqli_num_rows($result) > 0) {
    
    
      if(((int)$r['clave'])!=((int)$clave)){
          echo "2";
          return;
      } 
    }
     session_start();
    $_SESSION['usuario']=$user;
    echo '0';
   
?>
   