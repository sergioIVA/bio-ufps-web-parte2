<?php
$administrativo = $_POST['eliminar'];


include '../../logica/controladores/ControladorAdministrador.php';

$controlador = new ControladorAdministrador();
$result = $controlador->eliminarDocente($administrativo);

                          if($result){
                              
                              header('location:Administrativo.php');
                          }
                          else{
                            echo  "no se elimino Administrativo"; 
                          }
?>