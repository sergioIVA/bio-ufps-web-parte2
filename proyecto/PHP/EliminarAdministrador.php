
<?php

$usuario = $_POST['eliminar'];


include '../../logica/controladores/ControladorAdministrador.php';

$controlador = new ControladorAdministrador();
$result = $controlador->eliminarAdministrador($usuario);

                          if($result){
                              
                              header('location:ModificarAdministrador.php');
                          }
                          else{
                            echo  "no se elimino Administrador"; 
                          }
 


?>
 