
<?php

include'cabecera.php';
?>
<script>
    function ingresarDatosAula(nombre, descripcion) {

        var parametros = {
            "nombre": nombre,
            "descripcion": descripcion
        };
        $.ajax({
            data: parametros,
            url: 'registrarSala.php',
            type: 'post',
            /*
             beforeSend: function () {
             $("#resultado").html("Procesando, espere por favor...");
             },
             */
            success: function (response) {

                if (response == 0) {

                    location.href = "ModificarSala.php";
                }
                if (response == 1) {

                    alert("¡Error...Este numero de  sala ya esta!");
                }

                if (response == 2) {
                    alert("¡Debe digitar todos los campos!");
                }
            
        }
        });



    }
</script>
<span id="resultado" style="color: red"></span>
<div class="">
    <div class="clearfix"></div>
    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Agregar Sala </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="registrarSala.jsp" method="post">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Numero<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="nombre" name="Nombre" maxlength="10" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="descripcion" name="Descripcion" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <a class="btn btn-danger" href="ModificarSala.php">Cancelar</a>
                                <input type="button" class="btn btn-success" onclick="ingresarDatosAula(document.getElementById('nombre').value, document.getElementById('descripcion').value)" value="agregar"/> 
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php

    include 'finalPagina.php';
    ?>
