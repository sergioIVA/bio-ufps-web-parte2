
<?php

$nombre = $_POST['codigo2'];


include '../../logica/controladores/ControladorAdministrador.php';

$controlador = new ControladorAdministrador();
$result = $controlador->eliminarSala($nombre);

                          if($result){
                              
                              header('location:ModificarSala.php');
                          }
                          else{
                            echo  "no se elimino sala"; 
                          }
 



?>
 