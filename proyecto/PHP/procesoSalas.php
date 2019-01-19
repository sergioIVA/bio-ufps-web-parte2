

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
                <form action="procesoSalas.php" method="post">
            <button type="submit" class="btn btn-primary">Reporte por salas</button> 
                <br/>     
           <select name="aulas" id="aulas">
               <?php
                                include '../../logica/controladores/ControladorAdministrador.php';
                                $controlador=new ControladorAdministrador();
                                $result=$controlador->mostrarAulaNombre();
                                       $i=0;
                                       while($r=  mysqli_fetch_array($result)){
                                                echo "<option name=\"".$i."\" value=\"".$r['Nombre_Aula']."\">".$r['Nombre_Aula']."</option>";
                                            $i++;    
                                     }
               ?>
              </select>
              <form/>
              </div>
  
<h3>Reporte de salas</h3>
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
                        <th>AULA</th>
                        <th>Descripcion</th>
                        <th>TIPO DE USUARIO</th>
                        <th>USUARIO</th>
                        <th>Fecha</th>
                        <th>HORA ENTRADA</th>
                        <th>HORA DE SALIDA</th>
                       
                      </tr>
                    </thead>
                     <tbody>
                  <?php
                      $aula=$_POST['aulas'];
                     $result2=$controlador->reporteAula($aula);
                      
                                 while($x= mysqli_fetch_array($result2)){
                                     $salida=$x['hora_Salida'];
                                             if($salida==null){
                                                 $salida="No ha salido";
                                             }
                                     echo   "<tr><td>".$x['Nombre_Aula']."</td><td>".$x['Descripcion']
                                    . "</td><td>".$x['tipoUsuario']."</td><td>".$x['nombre']
                                    ."</td><td>".$x['Fecha'].
                                    "</td><td>".$x['hora_Entrada'].
                                    "</td><td>" .$salida."</td></tr>";        
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
  