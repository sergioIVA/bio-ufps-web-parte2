
<?php
include 'cabecera.php';
?>

<script>
    
        function hola(){
            document.write("hola a todos");
        }
        
         function ingresarDatosAdministrador(usuario,clave,nombre,cedula){
                 
                  var parametros = {
                 "usuario" : usuario,
                 "contraseña" : clave,
                 "nombre":nombre,
                 "cedula":cedula
        };
        $.ajax({
                data:  parametros,
                url:   'registrarAdministrador.php',
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
 
     

<div id="resultado" style="color: red"></div>
 <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>AGREGAR ADMINISTRADOR</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  method="post">
                      
                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">nombre<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nombre" name="nombre"  required="required" class="form-control col-md-7 col-xs-12" >
                      </div>
                    </div>
                      
                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">cedula<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="cedula" min="0" max="9999999999" name="cedula" required="required" class="form-control col-md-7 col-xs-12" >
                      </div>
                      </div>   
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name" >Usuario<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="usuario" required="required" class="form-control col-md-7 col-xs-12" name="Usuario">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">contraseña<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="clave"  maxlength="8" name="clave" required="required" class="form-control col-md-7 col-xs-12" >
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="reset" class="btn btn-primary">Borrar</button>
                        <button onclick="ingresarDatosAdministrador(document.getElementById('usuario'),document.getElementById('contraseña'),document.getElementById('nombre'),document.getElementById('cedula'))" class="btn btn-success">Agregar Administrador</button>
                            <!--ingresarDatosAdministrador(document.getElementById('usuario'),document.getElementById('contraseña'),document.getElementById('nombre'),document.getElementById('cedula'))-->
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div> 
     </div>

<button onclick="hola()" class="btn btn-success">Agregar Administrador</button>
     
      
<?php
include 'finalPagina.php';
?>
   