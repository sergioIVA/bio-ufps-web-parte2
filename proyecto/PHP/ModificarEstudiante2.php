<?php

$primaria=$_POST['primaria'];
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$codigo=$_POST['codigo'];
$telefono=$_POST['telefono'];
$codigoO=$_POST['codigoO'];


      
                           if(!empty($nombre)&&!empty($cedula)&&!empty($codigo)&&!empty($telefono)){
   include '../../logica/controladores/ControladorAdministrador.php';
   $controlador=new ControladorAdministrador();
   
   
                         if($codigo!=$codigoO&& mysqli_num_rows($controlador->verificarExisteCodigoUsuario($codigo))){
                             
                             echo '3';
                         }
                         else{
  
   $result=$controlador->modificarEstudiante($primaria, $nombre, $cedula, $codigo, $telefono);
   
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
