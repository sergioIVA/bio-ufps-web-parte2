<?php
include('cabecera.php');
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
    <input name="fecha" id="fe" type="hidden">
    </form>
</div>
<?php
include('finalPagina.php');
?>