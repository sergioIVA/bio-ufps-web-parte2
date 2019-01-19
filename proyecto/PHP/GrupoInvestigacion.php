<?php
include ("cabecera.php");
?>
<div class="row">
<div class=" col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Grupos de Investigacion</h2>
                  <div class="clearfix"></div>
                </div>
                  <div  align="right">
                  <form action="AgregarGrupo.php" method="post">
                   <input class="btn btn-success" type="submit"  value="Agregar"/>
                </form>
                  </div>
                <div class="x_content table-responsive"> 
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nombre Grupo</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                          include '../../logica/controladores/ControladorAdministrador.php';
                                $controlador=new ControladorAdministrador();
                                $result=$controlador->mostrarGrupos();
                                
                                $i=1;
                                
                                                  while($r=  mysqli_fetch_array($result)){
                                           echo "<tr><td>".$i."</td><td>".$r['nombre']."</td>"
                                           ."<td><form action=\"ModificarGrupo.php\" method=\"post\">"
                                           . "<input type=\"hidden\" name=\"usuario\" value=\"".$r['idGrupo']."\"/>"
                                           ."<input class=\"btn btn-info editar\" type=\"submit\"  value=\"Modificar\"></form></td>"
                                           ."<td><form action=\"EliminarGrupo.php\" method=\"post\">"
                                           . "<input type=\"hidden\" name=\"eliminar\" value=\"".$r['idGrupo']."\">"
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
include ("finalPagina.php");
?>