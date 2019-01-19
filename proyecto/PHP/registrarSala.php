
<?php 
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];


include '../../logica/controladores/ControladorAdministrador.php';


$controlador = new ControladorAdministrador();

     if(!empty($nombre)&&!empty($descripcion)){
  $result=$controlador->agregarSala($nombre, $descripcion);
  
    if ($result) {
        echo '0';
    }  else {
       echo "1"; 
       }
 
     }else{
         
         echo "2";
     }
?>
    