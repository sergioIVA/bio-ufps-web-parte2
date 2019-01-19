<?php
include("cabecera.php");
?>
<script>
 function modificarAdministrativo(primaria,nombre,cedula,cargo,correo,telefono){
         
        
                     var parametros={
                         
                         "primaria":primaria,
                         "nombre":nombre,
                         "cedula":cedula,
                         "cargo":cargo,
                         "correo":correo,
                         "telefono":telefono
                     };
                     
                      $.ajax({
                data:  parametros,
                url:   'ModificarAdministrativo2.php',
                type:  'post',
                /*
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                */
                success:  function (response) {
                                if(response==0){
                           
                        location.href ="Administrativo.php";   
                       }
                       if(response==1){
                           
                           alert("¡Error .... Este numero de cedula ya se encuentra registrado!");
                       }
                       
                       if(response==2){
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

include "blob.php";
                                     $cedula=$_POST['administrativo'];
                                     $controlador=new ControladorAdministrador();
                                     $result=$controlador->mostrarAdministrativo($cedula);
                                     
                                     $r=  mysqli_fetch_array($result);   
                                ?>  
                                 <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Modificar Administrativo </h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <br />
                                    
                                        
                                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >
                                            
                                            
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"><span class="required"></span>
                                                </label>
                                                <div align="center" class="col-md-6 col-sm-6 col-xs-12">
                                                   <img src='<?php echo  getFoto($r['cedula'])?>' alt='' height='80' width='80' class='img-circle' />
                                                </div>
                                            </div>
                                                <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre<span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="nombre" name="nombre"  required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $r['nombre']?>">
                                                </div>
                                            </div>
                                                
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Cedula<span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="cedula" name="Nombre" maxlength="10" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $r['cedula']?>">
                                                     <input type="hidden" id="primaria" name="UsuarioPrimaria" value="<?php echo $r['cedula']?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Cargo<span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="cargo" name="Cargo" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $r['cargo']?>">
                                                </div>
                                            </div>
                                             <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Correo<span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="email" id="correo" name="Correo" required="required"   class="form-control col-md-7 col-xs-12" value="<?php echo $r['correo']?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Telefono<span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="telefono" name="Telefono" maxlength="10" required="required"  class="form-control col-md-7 col-xs-12" value="<?php echo $r['telefono']?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div align="center" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">                          
                                                    <a class="btn btn-danger" href="Administrativo.php">Cancelar</a>
                                                    <input type="button" onclick="modificarAdministrativo(document.getElementById('primaria').value,document.getElementById('nombre').value,document.getElementById('cedula').value,document.getElementById('cargo').value,document.getElementById('correo').value,document.getElementById('telefono').value)" value="Modificar"  class="btn btn-success"/>
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
include ("finalPagina.php");
?>