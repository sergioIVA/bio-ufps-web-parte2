<?php
include("cabecera.php");
?>
<script>

    function modificarEstudiante(primaria, nombre, cedula, codigo, telefono, codigoO) {


        var parametros = {

            "primaria": primaria,
            "nombre": nombre,
            "cedula": cedula,
            "codigo": codigo,
            "telefono": telefono,
            "codigoO": codigoO
        };

        $.ajax({
            data: parametros,
            url: 'ModificarEstudiante2.php',
            type: 'post',
            /*
             beforeSend: function () {
             $("#resultado").html("Procesando, espere por favor...");
             },
             */
            success: function (response) {
                if (response == 0) {

                    location.href = "Estudiante.php";
                }
                if (response == 1) {

                    alert("!Error .... Este numero de cedula ya se encuentra registrado!");
                }

                if (response == 2) {
                    alert("¡Debe digitar todos los campos!");
                }
                if(response==3){
                    
                    alert("!Error .... Este codigo ya existe");
                }
            
        }
        });

}

    

</script>

<div class="">
    <div class="clearfix"></div>
    <div class="row">

        <div class="col-md-12 col-sm-12 col-xs-12">
            <?php
            include '../../logica/controladores/ControladorAdministrador.php';
            include "blob.php";
            $cedula = $_POST['estudiante'];
            $controlador = new ControladorAdministrador();
            $result = $controlador->mostrarEstudiante($cedula);

            $r = mysqli_fetch_array($result);
            ?>  
            <div class="x_panel">
                <div class="x_title">
                    <h2>Modificar Estudiante </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />


                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"><span class="required"></span>
                            </label>
                            <div align="center" class="col-md-6 col-sm-6 col-xs-12">
                                <img src='<?php echo getFoto($r['cedula']) ?>' alt='' height='80' width='80' class='img-circle' />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="nombre" name="nombre"  required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $r['nombre'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cedula<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="cedula" name="Nombre" required="required" maxlength="10" class="form-control col-md-7 col-xs-12" value="<?php echo $r['cedula'] ?>">
                                <input type="hidden" id="primaria" name="UsuarioPrimaria" value="<?php echo $r['cedula'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Codigo<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="codigo" name="Cedula" required="required" maxlength="10" class="form-control col-md-7 col-xs-12" value="<?php echo $r['codigo'] ?>">
                                <input type="hidden" id="codigoO" name="codigoO" value="<?php echo $r['codigo'] ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Telefono<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="telefono" name="Clave" required="required"  maxlength="10" class="form-control col-md-7 col-xs-12" value="<?php echo $r['telefono'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div align="center" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <a class="btn btn-danger" href="Estudiante.php">cancelar</a>
                                <input type="button" onclick="modificarEstudiante(document.getElementById('primaria').value, document.getElementById('nombre').value, document.getElementById('cedula').value, document.getElementById('codigo').value, document.getElementById('telefono').value, document.getElementById('codigoO').value)" value="Modificar"  class="btn btn-success"/>
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
include("finalPagina.php");
?>
