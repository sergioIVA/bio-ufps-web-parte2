<?php
include ("cabecera.php");
?>


<div class="center-margin">
    <form action="procesoReporteSemillero.php" method="post">
        <button type="submit" class="btn btn-primary">Reporte  Semillero</button> 
        <br/>     
        <select name="semillero" id="aulas">
            <?php
            include '../../logica/controladores/ControladorAdministrador.php';
            $controlador = new ControladorAdministrador();
            $result = $controlador->mostrarGrupos();
            $i = 0;
            while ($r = mysqli_fetch_array($result)) {
                echo "<option name=\"" . $i . "\" value=\"" . $r['idGrupo'] . "\">" . $r['nombre'] . "</option>";
                $i++;
            }
            ?>
        </select>
        <form/>
</div>


<?php
include ("finalPagina.php");
?>