<?php


$nombre=$_POST['nombre'];



                         if(!empty($nombre)){
include '../../logica/controladores/ControladorAdministrador.php';
$controlador = new ControladorAdministrador();
$result = $controlador->agregarGrupo(null, $nombre);

                                  if($result){
                                     
                                      echo "0";
                                 }
                                 
                                 else{
                                     echo "1";
                                     
                                 }
                         }else{
                             
                              echo "2";
                         }          
?>