
<?php 

$primaria=$_POST['primaria'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['Descripcion'];




                 if(!empty($primaria)&&!empty($nombre)&&!empty($descripcion)){
  include '../../logica/controladores/ControladorAdministrador.php';
   $controlador=new ControladorAdministrador();
   $result=$controlador->modificarSala($primaria, $nombre, $descripcion);
  
   
  
                      if($result){
                          
                          echo "0";
                      }else{
                          
                          echo '1';  
                      }
   }else{
       
            echo '2';
   }
?>
 