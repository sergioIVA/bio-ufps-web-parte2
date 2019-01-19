<?php
$primaria=$_POST['primaria'];
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$cargo=$_POST['cargo'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];


      
                             if(!empty($nombre)&&!empty($cedula)&&!empty($cargo)&&!empty($correo)&&!empty($telefono)){
   include '../../logica/controladores/ControladorAdministrador.php';
   $controlador=new ControladorAdministrador();
   $result=$controlador->modificarAdministrativo($primaria, $nombre, $cedula, $cargo,$correo, $telefono);
   
                      if($result){
                          
                          echo "0";
                      }else{
                          
                          echo '1';  
                      }
                             }else {
                                 
                                 echo "2";
                                 
                             }
 
?>