<?php
include "cabecera.php";
?>

<div class="row">
<div class=" col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Modificar Administrador</h2>
                  <div class="clearfix"></div>
                </div>
                <form action="agregarAdministrador2.php" method="post" align="right">
                   <input class="btn btn-success" type="submit" value="Agregar"/>
                </form>
                <div class="x_content table-responsive"> 
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Cedula</th>
                        <th>Correo</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                          include '../../logica/controladores/ControladorAdministrador.php';
                                $controlador=new ControladorAdministrador();
                                $result=$controlador->mostrarAdministradores();
                                
                                $i=1;
                                
                                                  while($r=  mysqli_fetch_array($result)){
                                           echo "<tr><td>".$i."</td><td>".$r['Usuario']."</td>"
                                           . "<td>".$r['nombre']."</td><td>".$r['cedula']
                                           ."</td><td>".$r['correo']."</td>"
                                           . "</td><td><form action=\"ModificarAdministrador2.php\" method=\"post\">"
                                           . "<input type=\"hidden\" name=\"usuario\" value=\"".$r['Usuario']."\">"
                                           ."<input class=\"btn btn-info editar\" type=\"submit\"  value=\"Modificar\"></form></td>"
                                           ."<td><form action=\"EliminarAdministrador.php\" method=\"post\">"
                                           . "<input type=\"hidden\" name=\"eliminar\" value=\"".$r['Usuario']."\">"
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
include "finalPagina.php";
?>