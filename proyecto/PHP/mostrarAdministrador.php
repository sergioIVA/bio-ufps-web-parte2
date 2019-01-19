
<?php
include 'cabecera.php';
?>
<div class="row">
    <div class=" col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Administradores</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>foto</th>
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Cedula</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../../logica/controladores/ControladorAdministrador.php';

                        $controlador = new ControladorAdministrador();
                        $result = $controlador->mostrarAdministradores();
                        
                          $i=1;
                          
                                          while($r=  mysqli_fetch_array($result)){
                                          echo "<tr><td><img src='blob.php?id=5'  alt='' height='70' width='70' /></td><td>".$i."</td><td>".$r['Usuario']."</td>"
                                          . "<td>".$r['nombre']."</td><td>".$r['cedula']
                                          ."</td></tr>";
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
include 'finalPagina.php';
?>
