<?php

$docente = $_POST['eliminar'];


include '../../logica/controladores/ControladorAdministrador.php';

$controlador = new ControladorAdministrador();
$result = $controlador->eliminarDocente($docente);

                          if($result){
                              
                              header('location:Docente.php');
                          }
                          else{
                            echo  "no se elimino Docente"; 
                          }
 
?>