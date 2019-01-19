<?php
include("cabecera.php");
?>
<div class="row">
<div class=" col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Estudiantes</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content table-responsive"> 
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th> 
                        <th>Foto</th>
                        <th>Nombre</td>
                        <th>Cedula</th>
                        <th>Codigo</th>
                        <th>Telefono</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                          include '../../logica/controladores/ControladorAdministrador.php';
                          include "blob.php";
                                $controlador=new ControladorAdministrador();
                                $result=$controlador->mostrarEstudiantes();
                                
                                $i=1;
                                
                                                  while($r=  mysqli_fetch_array($result)){
                                           echo "<tr><td>".$i."</td><td><p align='left'><img src='". getFoto($r['cedula'])."'  alt='' height='70' width='70' class='img-circle' /></p></td><td>".$r['nombre']."</td><td>".$r['cedula']
                                           ."</td><td>".$r['codigo']."</td><td>".$r['telefono']."</td><td><form action=\"ModificarEstudiante.php\" method=\"post\"><input type=\"hidden\" name=\"estudiante\" value=\"".$r['cedula']."\">"
                                           ."<input class=\"btn btn-info editar\" type=\"submit\"  value=\"Modificar\"></form></td>"
                                           ."<td><form action=\"EliminarEstudiante.php\" method=\"post\"><input type=\"hidden\" name=\"eliminar\" value=\"".$r['cedula']."\">"
                                           ."<input class=\"btn btn-danger\" type=\"submit\" value=\"Eliminar\"></form></td>"
                                           ."</td><tr>";  
                                            $i++;          
                                                  }
                        ?>
                    </tbody>
                  </table>          
                </div>
              </div>
            </div>
    </div>  



<?php
include("finalPagina.php");
?>