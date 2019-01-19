
<?php
include "cabecera.php";
?>
<script>

    function modificarSala(primaria, nombre, Descripcion) {

        var parametros = {

            "primaria": primaria,
            "nombre": nombre,
            "Descripcion": Descripcion
        };

        $.ajax({
            data: parametros,
            url: 'ModificarSala3.php',
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

                    alert("¡Error .... ya esta esa sala!");
                }

                if (response == 2) {
                    alert("¡Debe digitar todos los campos!");
                }


            }
        });

    }




</script>


<?php
include '../../logica/controladores/ControladorAdministrador.php';
$aula = $_POST['codigo1'];

$controlador = new ControladorAdministrador();
$result = $controlador->mostrarSalaNombre($aula);

$r = mysqli_fetch_array($result);
?> 

<div class="">

    <div class="clearfix"></div>

    <div class="row">


        <div class="col-md-12 col-sm-12 col-xs-12">

            <div class="x_panel">

                <div class="x_title">

                    <h2>Modificar Sala </h2>


                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Numero<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="nombre" name="Nombre" maxlength="10" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $r["Nombre_Aula"] ?>">
                                <input type="hidden" id="primaria" name="CodigoPrimaria" value="<?php echo $r['Nombre_Aula'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="descripcion" name="Descripcion" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $r['Descripcion']; ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <a class="btn btn-danger" href="ModificarSala.php">cancelar</a>
                                <button type="button" onclick="modificarSala(document.getElementById('primaria').value, document.getElementById('nombre').value, document.getElementById('descripcion').value)" class="btn btn-primary">agregar</button>
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
