<?php
include "cabecera.php";
?>

<script>

    function agregarAdministrador(usuario, nombre, cedula, clave, correo) {


        var parametros = {
            "usuario": usuario,
            "nombre": nombre,
            "cedula": cedula,
            "clave": clave,
            "correo": correo
        };

        $.ajax({
            data: parametros,
            url: 'registrarAdministrador.php',
            type: 'post',
            /*
             beforeSend: function () {
             $("#resultado").html("Procesando, espere por favor...");
             },
             */
            success: function (response) {
                        if(response==0){
                           
                        location.href ="ModificarAdministrador.php";   
                       }
                       if(response==1){
                           
                           alert("¡Error...ya existe nombre de usuario!");
                       }
                       
                       if(response==2){
                           alert("¡Debe digitar todos los campos!");
                       }
                       if(response==3){
                          alert("¡Error...ya esta esa cedula!");  
                       }
                
            
            }
        });

    }


</script>

<div class="">
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <h2>Agregar </h2>
                <div class="x_title">
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Usuario<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="usuario" name="Usuario" maxlength="20" required="required" class="form-control col-md-7 col-xs-12" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="nombre" name="Nombre" required="required" class="form-control col-md-7 col-xs-12" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cedula<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="cedula" name="Cedula" maxlength="10"  required="required" class="form-control col-md-7 col-xs-12" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Contraseña<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="password" id="clave" name="Clave" required="required"  maxlength="8" class="form-control col-md-7 col-xs-12" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Correo<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" id="email"   name="email" required="required" class="form-control col-md-7 col-xs-12" value="" >
                                </div>
                            </div> 
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <a href="ModificarAdministrador.php" class="btn btn-danger">Cancelar</a>
                                    <input type="button" onclick="agregarAdministrador(document.getElementById('usuario').value, document.getElementById('nombre').value, document.getElementById('cedula').value, document.getElementById('clave').value,document.getElementById('email').value)" value="agregar"  class="btn btn-success"/>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>


        </div>



        <div class="row">
            <div class="col-md-6 col-xs-12">


            </div>
        </div>

    </div>
    <?php
    include "finalPagina.php";
    ?>
   