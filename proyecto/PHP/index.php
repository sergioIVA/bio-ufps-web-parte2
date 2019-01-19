
<?php
include ('cabecera.php');
?>
<h2>Tercer Piso</h2>
<ul class="nav">
    <div class="row">
        <div class="col-md-12">
            <div class="">
                <div class="x_content">

                    <div class="row">
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12 col-md-offset-1">
                            <?php
                            include '../../logica/controladores/ControladorAdministrador.php';


                            $controlador = new ControladorAdministrador();
                            $result = $controlador->mostrarSalas();


                            $lengt = mysqli_num_rows($result);
                            $lengt2 = $lengt;

                            if ($lengt % 2 == 0) {
                                $lengt2 -= 1;
                                for ($i = (($lengt2 / 2) - 0.5); $i >= 0; $i--) {
                                    $valor1 = mysqli_fetch_array($result);
                                    echo "<form action='PersonasActual.php'"
                                    . " method='post'><div class='tile-stats'>" .
                                    "<div class='icon'><i class='fa fa-check'>" .
                                    "</i></div> <div class='count'>" . $valor1['Nombre_Aula'] . "</div>" .
                                    "<h3>" . $valor1['Descripcion'] . "</h3> <button type='submit'" .
                                    " name='salas' class='btn btn-danger' value='" . $valor1['Nombre_Aula'] . "'>"
                                    . "Examinar</button></div></form>";
                                }
                            } else {

                                for ($i = (($lengt / 2)); $i >= 0; $i--) {
                                    $valor1 = mysqli_fetch_array($result);
                                    echo "<form action='PersonasActual.php'"
                                    . " method='post'><div class='tile-stats'>" .
                                    "<div class='icon'><i class='fa fa-check'>" .
                                    "</i></div> <div class='count'>" . $valor1['Nombre_Aula'] . "</div>" .
                                    "<h3>" . $valor1['Descripcion'] . "</h3> <button type='submit'" .
                                    " name='salas' class='btn btn-danger' value='" . $valor1['Nombre_Aula'] . "'>"
                                    . "Examinar</button></div></form>";
                                }
                            }
                            ?> 
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12 col-md-offset-1">

                            <?php
                            if ($lengt % 2 == 0) {

                                for ($j = ((($lengt2 / 2) + 1) - 0.5); $j < $lengt; $j++) {
                                    $valor2 = mysqli_fetch_array($result);
                                    echo "<form action='PersonasActual.php'"
                                    . " method='post'><div class='tile-stats'>" .
                                    "<div class='icon'><i class='fa fa-check'>" .
                                    "</i></div> <div class='count'>" . $valor2['Nombre_Aula'] . "</div>" .
                                    "<h3>" . $valor2['Descripcion'] . "</h3> <button type='submit'" .
                                    " name='salas' class='btn btn-danger' value='" . $valor2['Nombre_Aula'] . "'>"
                                    . "Examinar</button></div></form>";
                                }
                            } else {


                                for ($j = ((($lengt / 2) + 1)); $j < $lengt; $j++) {
                                    $valor2 = mysqli_fetch_array($result);
                                    echo "<form action='PersonasActual.php'"
                                    . " method='post'><div class='tile-stats'>" .
                                    "<div class='icon'><i class='fa fa-check'>" .
                                    "</i></div> <div class='count'>" . $valor2['Nombre_Aula'] . "</div>" .
                                    "<h3>" . $valor2['Descripcion'] . "</h3> <button type='submit'" .
                                    " name='salas' class='btn btn-danger' value='" . $valor2['Nombre_Aula'] . "'>"
                                    . "Examinar</button></div></form>";
                                }
                            }
                            ?>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php
    include ('finalPagina.php');
    ?>



