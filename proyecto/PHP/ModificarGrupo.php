<?php
include ("cabecera.php");
?>
<script>

    function modificarGrupo(primaria, nombre) {


        var parametros = {

            "primaria": primaria,
            "nombre": nombre
        };

        $.ajax({
            data: parametros,
            url: 'ModificarGrupo2.php',
            type: 'post',
            /*
             beforeSend: function () {
             $("#resultado").html("Procesando, espere por favor...");
             },
             */
            success: function (response) {
                if (response == 0) {

                    location.href = "GrupoInvestigacion.php";
                }
                if (response == 1) {

                    alert("¡Error .... Este grupo de investigacion ya existe!");
                }

                if (response == 2) {
                    alert("¡Debe digitar todos los campos!");
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
            $grupo = $_POST['usuario'];
            $controlador = new ControladorAdministrador();
            $result = $controlador->mostrarGrupoInvestigacion($grupo);
            $r = mysqli_fetch_array($result);
            ?>  
            <div class="x_panel">
                <div class="x_title">
                    <h2>Modificar </h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />


                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Grupo Investigacion<span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="grupo" name="Usuario" maxlength="50" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $r['nombre'] ?>">
                                <input type="hidden" id="primaria" name="UsuarioPrimaria" value="<?php echo $r['idGrupo'] ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <a class="btn btn-danger" href="GrupoInvestigacion.php">Cancelar</a>
                                <input type="button" onclick="modificarGrupo(document.getElementById('primaria').value, document.getElementById('grupo').value)" value="Modificar"  class="btn btn-success"/>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>


    </div>


</div>
<?php
include ("finalPagina.php");
?>