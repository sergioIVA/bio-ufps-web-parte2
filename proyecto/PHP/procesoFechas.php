
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
include "cabecera.php" 
?>

  <div class="row">
       <h2>Generar reporte</h2>
                  <ul class="nav">
       
                <div class="x_content ">Selecciona el rango que desee
                  <br><br>
                  <form class="form-horizontal" action="procesoFechas.php" method="post">
                      <fieldset>
                        <div class="control-group">
                          <div class="controls">
                            <div class="input-prepend input-group">
                              <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                              <input type="text" style="width: 200px" name="fecha" id="reservation" class="form-control" value="01/18/2016 - 01/23/2016" />
                              <button type="submit" class="btn btn-success">Generar</button>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </form>
            </div>
             <h3>Reporte por Fechas</h3>         
                      </ul>
           <?php
             include '../../logica/controladores/ControladorAdministrador.php';
                                
                                $rango=$_POST['fecha'];
                                $controlador=new ControladorAdministrador();
                                
                                try {
                                    $result=$controlador->reporteFecha($rango); 
                                    
             ?>                       
                 <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="nav navbar-right panel_toolbox">
                </div>
                <div class="x_content table-responsive">
                  <p class="text-muted font-13 m-b-30">
                  </p>
                  <table id="datatable-buttons" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>FECHA</th>
                        <th>AULA</th>
                        <th>TIPO DE USUARIO</th>
                        <th>USUARIO</th>
                        <th>CEDULA</th>
                        <th>HORA ENTRADA</th>
                        <th>HORA DE SALIDA</th>
                        <th>DESCRIPCION</th>
                      </tr>
                    </thead>
                     <tbody>                    
                                    
              <?php                      
                                 while($r=  mysqli_fetch_array($result)){
                                              
                                              $salida=$r['hora_Salida'];
                                              
                                                         if($salida==null){
                                                    $salida="No ha salido";         
                                                         }
                                              
                                        echo  "<tr><td>".$r['Fecha']."</td><td>".$r['Nombre_Aula']."</td>"
                                        . "<td>".$r['tipoUsuario']."</td><td>".$r['nombre'].
                                         "</td><td>".$r['cedula']."</td><td>".$r['hora_Entrada'].
                                         "</td><td>" .$salida."</td><td>".$r['Descripcion']."</td></tr>" ; 
                                        
                                          }      
                                    
                                } catch (Exception $ex) {
                                    echo $ex->getMessage()."<br/>";
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
          var handleDataTableButtons = function() {
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
            TableManageButtons = function() {
              "use strict";
              return {
                init: function() {
                  handleDataTableButtons()
                }
              }
            }();
        </script>
        <script type="text/javascript">
          $(document).ready(function() {
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


