<?php

session_start();
if(isset($_SESSION['usuario'])){
    
    header('location:index.php');
}

else{

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        
        
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../fonts/css/font-awesome.min.css" rel="stylesheet">
        <link href="../css/animate.min.css" rel="stylesheet">
          
       
      
        
        <!-- Custom styling plus plugins -->
        <link href="../css/custom.css" rel="stylesheet">
        <link href="../css/icheck/flat/green.css" rel="stylesheet">
         <script src="../js/jquery.min.js"></script>
         
        <script>
             function validar(user,pass){
                 
                  var parametros = {
                 "usuario" : user,
                 "clave" : pass
        };
        $.ajax({
                data:  parametros,
                url:   'validarLogin.php',
                type:  'post',
                /*
                beforeSend: function () {
                        $("#resultado").html("Procesando, espere por favor...");
                },
                */
                success:  function (response) {
                    if (response == 0) {
                    location.href = "index.php";
                }
                if (response == 1) {

                    alert("¡usuario es incorrecto!");
                }

                if (response == 2) {
                    alert("¡la clave de usuario no es correcta!");
                }
                if(response==3){
                    alert("¡Digite todos los campos!");
                }
                
                }
        });
                   
    }
         </script>
    
    </head>
     
    <body style="background: #F7F7F7">
        
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>
        <div id="wrapper">
            <div class="animate form">
                <section class="login_content">     
                    <form  class="center" method="post" >
            <span id="resultado" style="color: red"></span>
			<div class="alert alert-danger" role="alert">
								This is a danger alert—check it o</div>
            <h1>Login Administrador</h1>
            <div>
                <input type="text" id="user" class="form-control" placeholder="Nombre usuario" required="required" name="usuario" />
                </div>
            <div>
                <input type="password" id="password"class="form-control" placeholder="contraseña" required="required" name="clave"/>
            </div>
            <div class="center-margin">
                <!--
                <button  onclick="validar(document.getElementById('user').value,document.getElementById('password').value)" class="btn btn-primary">ingresar</button>
                -->
                <input type="button" onclick="validar(document.getElementById('user').value,document.getElementById('password').value)" class="btn btn-danger waves-effect waves-light" value="ingresar"/>
               
                <a  href="recuperarClave.php">Olvidas tu contraseña ?</a> 
               
            </div>   
            
              <div class="clearfix" id="boton"></div>
            <div class="separator">
               <!--
              <p class="change_link">New to site?
                <a href="#toregister" class="to_register"> Create Account </a>
              </p>
               -->
              <div class="clearfix" ></div>
              <br />
              <div>
                <h1><i class="fa fa-male" style="font-size: 26px;"></i> Acceder como Administrador!</h1>
                <p></p>
              </div>
            </div>
          </form>
                    </section> 
                </div>
        </div>
      
    </body>
</html>
  <?php
}
 ?>
