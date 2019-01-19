<?php


$primaria=$_POST['primaria'];
$nombre=$_POST['nombre'];
$cedula=$_POST['cedula'];
$codigo=$_POST['codigo'];
$tipoDocente=$_POST['tipoDocente'];
$telefono=$_POST['telefono'];
$codigoO=$_POST['codigoO'];

      
 
  include '../../logica/controladores/ControladorAdministrador.php';
 
  
    if(!empty($primaria)&&!empty($nombre)&&!empty($cedula)&&!empty($codigo)&&!empty($tipoDocente)&&!empty($telefono)&&!empty($codigoO)){
  
  
   $controlador=new ControladorAdministrador();
   
   
                          if($codigoO!=$codigo&& mysqli_num_rows($controlador->verificarExisteCodigoUsuario($codigo))){
                              
                            echo '3';  
                          }else{
   $result=$controlador->modificarDocente($primaria, $nombre, $cedula, $codigo,$tipoDocente, $telefono);
   
                      if($result){
                          
                          echo "0";
                      }else{
                          
                          echo '1';  
                      }
                          }
}else{
    
     echo '2'; 
    
}
?>