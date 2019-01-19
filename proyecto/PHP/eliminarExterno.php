<?php

$externo = $_POST['eliminar'];


include '../../logica/controladores/ControladorAdministrador.php';

$controlador = new ControladorAdministrador();
$result = $controlador->eliminarExterno($externo);

                          if($result){
                              
                              header('location:Externo.php');
                          }
                          else{
                            echo  "no se elimino externo"; 
                          }
 
?>