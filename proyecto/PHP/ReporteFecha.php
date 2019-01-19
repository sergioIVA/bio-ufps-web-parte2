
<?php
include "cabecera.php" 
?>
<div class="row">
<h2>Generar reporte</h2>
                  <ul class="nav">
          <div class="row">
                <div class="x_content">Selecciona el rango que desee
                  <br><br>
                  <form class="form-horizontal" action="procesoFechas.php" method="post" >
                      <fieldset>
                        <div class="control-group">
                          <div class="controls">
                            <div class="input-prepend input-group">
                              <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                              <input type="text" style="width: 200px" name="fecha" id="reservation" class="form-control" value="01/18/2016 - 01/23/2016" />
                              <button type="submit" class="btn btn-success">Generar</button><!--03/18/2013 - 03/23/2013-->
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </form>
            </div>
          </div>
                      </ul>
</div>
<?php
include ('finalPagina.php');
?>


