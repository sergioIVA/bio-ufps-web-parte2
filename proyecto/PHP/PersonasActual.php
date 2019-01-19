
<?php
include ('cabecera.php');
?>
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
                        <th>Foto</th> 
                        <th>Usuario</th>
                        <th>Cedula</th>
                        <th>Tipo Usuario</th>
                        <th>Nombre Aula</th>
                        <th>Descripcion</th>
                        <th>Fecha</th>
                        <th>Hora Entrada</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    include '../../logica/controladores/ControladorAdministrador.php';
                    include "blob.php";
                    $aula = $_POST['salas'];

                    $controlador = new ControladorAdministrador();
                    $result = $controlador->mostrarUsuarioAula($aula);


                    while ($r = mysqli_fetch_array($result)) {
                        
                        echo "<tr><td><p align='center'> <img src='". getFoto($r['cedula'])."'  alt='' height='70' width='70' class='img-circle'/>"
                        . "</p></td></td><td>" . $r['nombre'] . "</td><td>" . $r['cedula']
                        . "</td><td>" . $r['tipoUsuario'] . "</td><td>" . $r['Nombre_Aula']
                        . "</td><td>" . $r['Descripcion'] .
                        "</td><td>" . $r['Fecha'] .
                        "</td><td>" . $r['hora_Entrada'] . "</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<?php
include ('finalPagina.php');
?>
