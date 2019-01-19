
<?php
include 'cabecera.php';
?>

<div class="row">
    <div class=" col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>SALAS</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../../logica/controladores/ControladorAdministrador.php';


                        $controlador = new ControladorAdministrador();
                        $result = $controlador->mostrarSalas();
                        
                                   $i=1;
                          
                                      while($r=  mysqli_fetch_array($result)){
                                          echo "<tr><td>".$i."</td><td>".$r['Nombre_Aula']."</td>"
                                          . "<td>".$r['Descripcion']."</tr>";
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
    