<?php
include 'cabecera.php';
?>


 
 <!--<span id="resultado" ></span>-->
 <div class="row" id="resultado">
    <div class=" col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Modificar Sala</h2>
                  <div class="clearfix"></div>
                </div>
                  <form action="agregarSalas.php" method="post" align="right">
               <input class="btn btn-success" type="submit" value="Agregar"/>
                  </form>
                <div class="x_content table-responsive"> 
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Numero</th>
                        <th>Nombre</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                        
                        
                        include '../../logica/controladores/ControladorAdministrador.php';
                        
                        $controlador=new ControladorAdministrador();
                        $result=$controlador->mostrarSalas();
                        
                                            $i=1;
                                             while($r=  mysqli_fetch_array($result)){
                              echo "<tr><td>".$i."</td><td>".$r['Nombre_Aula']."</td>"
                             . "<td>".$r['Descripcion']."</td><td>"
                             ."<td><form action=\"ModificarSala2.php\" method=\"post\"><input type=\"hidden\" "
                             . "name=\"codigo1\" value=\"".$r['Nombre_Aula']."\"><input class=\"btn btn-info editar\" type=\"submit\" "
                             . " value=\"Modificar\"></form></td><td><form action=\"eliminarSala.php\" method=\"post\"><input type=\"hidden\" id=\"nombre\""
                             . " name=\"codigo2\" value=\"".$r['Nombre_Aula']."\"></td><td>".
                             "<input class=\"btn btn-danger\"  type=\"submit\" value=\"Eliminar\"></form>"
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
include 'finalPagina.php'
?>