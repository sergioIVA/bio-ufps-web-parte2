
<!-- Custom styling plus plugins -->
<link href="../css/custom.css" rel="stylesheet">
<link href="../css/icheck/flat/green.css" rel="stylesheet">
<link href="../js/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="../js/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../js/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../js/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="../js/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery.min.js"></script>

<?php
include 'cabecera.php';
?>

<div class="row">
    <div class="center-margin">

        <form action="procesoUsuario.php" method="post">
            <button type="submit" class="btn btn-primary">Reporte por Usuario</button> 
            <br/>     
            <select name="usuarios" id="aulas">
                <option value="Estudiante">Estudiante</option>
                <option value="Docente">Docente</option> 
                <option value="Administrativo">Administrativo</option> 
                <option value="Externo">Externo</option> 
            </select>
        </form>
    </div>
    <h3>Reporte de usuarios</h3>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="nav navbar-right panel_toolbox">
            </div>
            <div class="x_content">
                <p class="text-muted font-13 m-b-30">

                </p>
                <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <?php
                            include '../../logica/controladores/ControladorAdministrador.php';
                            $usuario = $_POST['usuarios'];
                            $controlador = new ControladorAdministrador();
                            $result = $controlador->reporteUsuario($usuario);


                            if (strcasecmp($usuario, "Estudiante") == 0) {
                                ?>       

                                <th>TipoUsuario</th>
                                <th>Aula</th>
                                <th>Nombre</th>
                                <th>Codigo</th>
                                <th>Cedula</th>
                                <th>Telefono</th>
                                <th>Fecha</th>
                                <th>Hora Entrada</th>
                                <th>Hora Salida</th>
                                <?php
                            } else if (strcasecmp($usuario, "Docente") == 0) {
                                ?>
                                <th>TipoUsuario</th>
                                <th>Aula</th>
                                <th>Nombre</th>
                                <th>Codigo</th>
                                <th>Cedula</th>
                                <th>Tipo Docente</th>
                                <th>Telefono</th>
                                <th>Fecha</th>
                                <th>Hora Entrada</th>
                                <th>Hora Salida</th>
                                <?php
                            } else {
                                ?>
                                <th>TipoUsuario</th>
                                <th>Aula</th>
                                <th>Nombre</th>
                                <th>Cedula</th>
                                <th>Correo</th>
                                <th>Cargo</th>
                                <th>Telefono</th>
                                <th>Fecha</th>
                                <th>Hora Entrada</th>
                                <th>Hora Salida</th>

                                <?php
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        if (strcasecmp($usuario, "Estudiante") == 0) {

                            while ($r = mysqli_fetch_array($result)) {

                                $salida = $r['hora_Salida'];
                                if ($salida == null) {
                                    $salida = "No ha salido";
                                }
                                echo "<tr><td>" . $r['tipoUsuario'] . "</td><td>" . $r['Nombre_Aula']
                                . "</td><td>" . $r['nombre'] . "</td><td>" . $r['codigo']
                                . "</td><td>" . $r['cedula'] . "</td><td>" . $r['telefono'] . "</td><td>"
                                . $r['Fecha'] . "</td><td>" . $r['hora_Entrada'] . "</td><td>" . $r['hora_Salida'] . "</td></tr>";
                            }
                        } else if (strcasecmp($usuario, "Docente") == 0) {

                            while ($r = mysqli_fetch_array($result)) {
                                $salida = $r['hora_Salida'];
                                if ($salida == null) {
                                    $salida = "No ha salido";
                                }
                                echo "<tr><td>" . $r['tipoUsuario'] . "</td><td>" . $r['Nombre_Aula']
                                . "</td><td>" . $r['nombre'] . "</td><td>" . $r['codigo']
                                . "</td><td>" . $r['cedula'] . "</td><td>" . $r['tipoDocente'] . "</td>" . "<td>" . $r['telefono'] . "</td><td>" . $r['Fecha'] . "</td><td>" . $r['hora_Entrada'] .
                                "</td><td>" . $salida . "</td></tr>";
                            }
                        } else {
                            while ($r = mysqli_fetch_array($result)) {
                                $salida = $r['hora_Salida'];
                                if ($salida == null) {
                                    $salida = "No ha salido";
                                }
                                echo "<tr><td>" . $r['tipoUsuario'] . "</td><td>" . $r['Nombre_Aula']
                                . "</td><td>" . $r['nombre'] . "</td><td>" . $r['cedula']
                                . "</td><td>" . $r['correo'] . "</td><td>" . $r['cargo'] . "</td><td>" . $r['telefono'] . "</td><td>"
                                . $r['Fecha'] . "</td><td>" . $r['hora_Entrada'] . "</td><td>" . $salida . "</td></tr>";
                            }
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

<!-- Datatables-->
<script src="../js/datatables/jquery.dataTables.min.js"></script>
<script src="../js/datatables/dataTables.bootstrap.js"></script>
<script src="../js/datatables/dataTables.buttons.min.js"></script>
<script src="../js/datatables/buttons.bootstrap.min.js"></script>
<script src="../js/datatables/jszip.min.js"></script>
<script src="../js/datatables/pdfmake.min.js"></script>
<script src="../js/datatables/vfs_fonts.js"></script>
<script src="../js/datatables/buttons.html5.min.js"></script>
<script src="../js/datatables/buttons.print.min.js"></script>
<script src="../js/datatables/dataTables.fixedHeader.min.js"></script>
<script src="../js/datatables/dataTables.keyTable.min.js"></script>
<script src="../js/datatables/dataTables.responsive.min.js"></script>
<script src="../js/datatables/responsive.bootstrap.min.js"></script>
<script src="../js/datatables/dataTables.scroller.min.js"></script>
<!-- pace -->
<script src="../js/pace/pace.min.js"></script>

<script>
    var handleDataTableButtons = function () {
        "use strict";
        0 !== $("#datatable-buttons").length && $("#datatable-buttons").DataTable({
            dom: "Bfrtip",
            buttons: [{
                    extend: "copy",
                    className: "btn-sm"
                }, {
                    extend: "csv",
                    className: "btn-sm"
                }, {
                    extend: "excel",
                    className: "btn-sm"
                }, {
                    extend: "pdf",
                    className: "btn-sm"
                }, {
                    extend: "print",
                    className: "btn-sm"
                }],
            responsive: !0
        })
    },
            TableManageButtons = function () {
                "use strict";
                return {
                    init: function () {
                        handleDataTableButtons()
                    }
                }
            }();
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#datatable').dataTable();
        $('#datatable-keytable').DataTable({
            keys: true
        });
        $('#datatable-responsive').DataTable();
        $('#datatable-scroller').DataTable({
            ajax: "js/datatables/json/scroller-demo.json",
            deferRender: true,
            scrollY: 380,
            scrollCollapse: true,
            scroller: true
        });
        var table = $('#datatable-fixed-header').DataTable({
            fixedHeader: true
        });
    });
    TableManageButtons.init();
</script>

