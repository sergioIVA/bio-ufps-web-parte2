<?php
include ('cabecera.php');
?>
<div class="row">
    <h2>Generar Estadistica Sala</h2>
    <ul class="nav">
        <div class="row">
            <div class="x_content">Selecciona el rango que desee
                <br><br>
                <form class="form-horizontal" action="EstadisticaSalasFecha2.php" method="post" >
                    <fieldset>
                        <div class="control-group">
                            <div class="controls">
                                <div class="input-prepend input-group">
                                    <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                    <input type="text" style="width: 200px" name="fecha" id="reservation" class="form-control" value="01/18/2016 - 01/23/2016" />
                                    <button type="submit" class="btn btn-success">Especifico</button><!--03/18/2013 - 03/23/2013-->
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </ul>

    <form action="EstadisticaSalasFecha2.php" method="post">
        <button type="submit" class="btn btn-primary">General</button> 
        <input type="hidden" name="fecha" id="fe"/>
    </form>
</div>


<?php
include '../../logica/controladores/ControladorAdministrador.php';
$rango = $_POST['fecha'];
$controlador = new ControladorAdministrador();
?>
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages: ["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['salas', 'Cantidad'],
    <?php
    $titulo = "";
    if ($rango != null) {

        $titulo = "Frecuencia en salas fecha:" . $rango . "";
        $result = $controlador->cantidadUsuariosSalaFecha($rango);
        while ($r = mysqli_fetch_array($result)) {

            echo "['" . $r['Nombre_Aula'] . "-" . $r['Descripcion'] . "'," . $r['cuantos'] . "],";
        }
    } else {
        $titulo = "Frecuencia Total de entrada salas";
        $result = $controlador->CantidadusuariosSala();
        while ($r = mysqli_fetch_array($result)) {

        echo "['" . $r['Nombre_Aula'] . "-" . $r['Descripcion'] . "'," . $r['cuantos'] . "],";
        }
    }
    ?>
            ]);

            var options = {
                title: '<?php echo $titulo ?>',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>

  
<div class="row">
    <div class=" col-xs-12">
        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
    </div>
</div>


<?php
include ('finalPagina.php');
?>