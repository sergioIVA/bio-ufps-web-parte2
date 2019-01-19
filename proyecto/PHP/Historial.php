<?php
include("cabecera.php");
?>

<form action='BorrarHistorial.php' method="post" align="right">
<button type='submit' class='btn btn-danger'>Borrar Todo</button>
</form>
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="nav navbar-right panel_toolbox">
        </div>
        <div class="x_content">
            <p class="text-muted font-13 m-b-30">

            </p>
            <table id="datatable-buttons" class="table table-striped table-bordered table-responsive"">
                <thead>
                    <tr>
                        <th>Fecha</th> 
                        <th>hora_Entrada</th>
                        <th>hora_Salida</th>
                        <th>Aula</th>
                        <th>Descripcion</th>
                        <th>Usuario</th>
                        <th>Grupo</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                   
              include '../../logica/controladores/ControladorAdministrador.php';
              $controlador = new ControladorAdministrador();
              $result=$controlador->historial();
  
                    while ($r = mysqli_fetch_array($result)) {
                        $grupo=$r['grupo'];
                        $salida=$r['hora_Salida'];
                        
                                           if($grupo==null){ 
                        $grupo="No asiste en representacion de  grupo ";
                                           }
                                           if($salida==null){
                        $salida="No ha salido";                       
                                           }
                                           
                        echo "<tr><td>".$r['Fecha']."</td></td><td>". $r['hora_Entrada']."</td>"
                        . "<td>".$salida."</td><td>".$r['Aula_Nombre']."</td><td>".$r['Descripcion']
                        . "</td><td>" . $r['Usuario_cedula'] ."</td><td>" .$grupo."</td></tr>";
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

