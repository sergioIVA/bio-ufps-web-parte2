<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="denker">

    <title> Resetear contraseña </title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="../css/estilo2.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet">

  
  <link href="../fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/animate.min.css" rel="stylesheet">
 
 <!--
  <link rel="stylesheet" href="../materialize/css/materialize.min.css">
  <script src="../materialize/mate/js/materialize.min.js"></script>
    -->        
  <!-- Custom styling plus plugins -->
  <link href="../css/custom.css" rel="stylesheet">
  <link href="../css/icheck/flat/green.css" rel="stylesheet">


  <script src="../js/jquery.min.js"></script>

  </head>

  <body>
     <script>
             function verificarCorreo(correo){
                 
                  var parametros = {
                 "correo" : correo
        };
        $.ajax({
                data:  parametros,
                url:   'ProcesoRecuperar.php',
                type:  'post',
                /*
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                */
                success:  function (response) {
                 $("#resultado").html(response);
                }
        });
        
              
    }
         </script>
        
    <div class="container" role="main">
       
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <form id="frmRestablecer" action="validaremail.php" method="post">
          <div class="panel panel-default">
             <span id="resultado" style="color:red"></span>    
            <div class="panel-heading"> Restaurar contraseña </div>
            <div class="panel-body">
              <p></p>
              <div class="form-group">
                <label for="email"> Escribe el email asociado a tu cuenta para recuperar tu contraseña </label>
                <input type="email" id="email" class="form-control" name="email" required>
              </div>
              <div class="form-group">
                  <input type="button" class="btn btn-primary" onclick="verificarCorreo(document.getElementById('email').value)" value="Recuperar contraseña" >
                  <a href="Login.php" class="btn btn-primary"  >Volver</a>
              </div>
            </div>
          </div>
        </form>
        <div id="mensaje">
          
        </div>
      </div>
      <div class="col-md-4"></div>

    </div> <!-- /container -->

<script src="../js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="../js/progressbar/bootstrap-progressbar.min.js"></script>
  <!-- icheck -->
  <script src="../js/icheck/icheck.min.js"></script>

  <!-- daterangepicker -->
  <script type="text/javascript" src="../js/moment/moment.min.js"></script>
  <script type="text/javascript" src="../js/datepicker/daterangepicker.js"></script>
  <script src="../js/custom.js"></script>

  <!-- pace -->
  <script src="../js/pace/pace.min.js"></script>
  <!-- /datepicker -->
  <script type="text/javascript">
    $(document).ready(function() {
      $('#single_cal1').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_1"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#single_cal2').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_2"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#single_cal3').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_3"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
      $('#single_cal4').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_4"
      }, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#reservation').daterangepicker(null, function(start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
      });
    });
  </script>
  <!-- /datepicker -->

  </body>
</html>
