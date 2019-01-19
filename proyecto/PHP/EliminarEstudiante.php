<?php

$estudiante = $_POST['eliminar'];


include '../../logica/controladores/ControladorAdministrador.php';

$controlador = new ControladorAdministrador();
$result = $controlador->eliminarEstudiante($estudiante);

                          if($result){
                              
                              header('location:Estudiante.php');
                          }
                          else{
                            echo  "no se elimino Administrador"; 
                          }
 

?>