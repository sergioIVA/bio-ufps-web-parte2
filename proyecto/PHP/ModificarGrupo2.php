<?php
$primaria=$_POST['primaria'];
$nombre=$_POST['nombre'];




                            if(!empty($primaria)&&!empty($nombre)){
  include '../../logica/controladores/ControladorAdministrador.php';
   $controlador=new ControladorAdministrador();
   $result=$controlador->modificarGrupo($primaria, $nombre);
   
                      if($result){
                          
                          echo "0";
                      }else{
                          
                          echo '1';  
                      }
                      }else{
                          
                           echo "2";
                      }
?>