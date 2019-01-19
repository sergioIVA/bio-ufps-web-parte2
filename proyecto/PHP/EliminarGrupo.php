<?php

$grupo = $_POST['eliminar'];


include '../../logica/controladores/ControladorAdministrador.php';

$controlador = new ControladorAdministrador();
$result = $controlador->eliminarGrupo($grupo);

                          if($result){
                              
                              header('location:GrupoInvestigacion.php');
                          }
                          else{
                            echo  "no se elimino el grupo"; 
                          }
?>