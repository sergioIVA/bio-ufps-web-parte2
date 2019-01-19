
<?php

$primaria=$_POST['primaria'];
$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$clave=$_POST['clave'];
$correo=$_POST['correo'];
$cedulaO=$_POST['cedulaO'];


       
                 if (!empty($usuario) && !empty($clave) && !empty($nombre) && !empty($cedula) && !empty($correo)) {
 
  include '../../logica/controladores/ControladorAdministrador.php';
   $controlador=new ControladorAdministrador();
  
                  if($cedula!=$cedulaO&&mysqli_num_rows($controlador->verificarExisteCedulaAdministrador($cedula))>0){
                      
                      echo '3';  
                      
                  }else{
   
    $result=$controlador->modificarAdministrador($primaria, $usuario, $nombre, $cedula, $clave,$correo);
                      if($result){
                          
                          echo "0";
                      }else{
                          
                          echo '1';  
                      }
 
                  }

                 }else{
                     
                     echo "2";
                 }
?>

