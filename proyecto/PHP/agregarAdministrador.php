
<?php
include 'cabecera.php';
?>

<script>
             function registrarAdministrador(usuario,clave,nombre,cedula,correo){

                  var parametros = {
                 "usuario":usuario,
                 "clave" : clave,
                 "nombre": nombre,
                 "cedula": cedula,
                 "correo":correo
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
      <!--<span id="resultado" style="color:red"></span>-->
      <p align="center"><h5 id="resultado" style="color:red"></h5></p>
       <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>AGREGAR ADMINISTRADOR</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="ModificarAdministrador.php" method="post">
                      
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
                        <input type="text" id="us" name="usuario" required="required" class="form-control col-md-7 col-xs-12" >
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
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Correo<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email"   name="email" required="required" class="form-control col-md-7 col-xs-12" >
                      </div>
                    </div>  
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         <button type="reset" class="btn btn-primary">borrar</button>
                           <!-- <button type="submit" class="btn btn-danger">cancelar</button>-->
                            <button  onclick="registrarAdministrador(document.getElementById('us').value,document.getElementById('clave').value,document.getElementById('nombre').value,document.getElementById('cedula').value,document.getElementById('email').value)"   class="btn btn-success" >Agregar administrador</buttom>
                      </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>  
<?php
include 'finalPagina.php';
?>
   