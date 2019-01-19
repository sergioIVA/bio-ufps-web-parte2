
<?php

session_start();

if(!isset($_SESSION['usuario'])){
    echo "<script>usted no ha iniciado session</script>";
    echo '<script>location.href="Login.php"</script>';
}

?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Bio-UFPS! | </title>

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
  <style>
    .tile-stats{
          margin-top: 50px;
          background: #ECEDFF;
    }
    .icon{
          background-image: none; 
    }
    .fa-check{
          color: green;
    }
    .fa-close{
          color: red;
    }
    .tile-stats:hover .icon i {
          color: none;
    }
  </style>


</head>


<body class="nav-md">
    
  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title bg-red" style="border: 0 ">
            <a href="" class="site_title" style="background-color: #ef0b0b;"><i class="fa fa-mortar-board"></i> <span>Bio-UFPS!</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
                
		<div class="contenedor">
		  <div class="cubo">
		    <div class="cara" id="uno" ></div>
		    <div class="cara"  id="dos" ></div>
		    <div class="cara"  id="tres"></div>
		    <div class="cara"  id="cuatro"></div>
		    <div class="cara"  id="cinco"></div>
		    <div class="cara"  id="seis"></div>
		  </div>
		</div>

            </div>
            <div class="profile_info">
              <span>Bienvenido!</span>
              <h2><?php echo $_SESSION['usuario']?></h2>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <hr>
              <h3>Menu General</h3>
              <ul class="nav side-menu">
                 
                  <li><a href="index.php"><i class="fa fa-institution"></i> Panel Principal </a> 
                </li>
                  
                   <li><a href="ModificarAdministrador.php"><i class="fa fa-male"></i>Administradores</a>
                </li>
                  
                <li><a href="ModificarSala.php"><i class="fa fa-home"></i> Salas</a>
                </li>
                <li><a><i class="fa fa-user"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                      <li><a href="Estudiante.php">Estudiante</a>
                    </li>
                    <li><a href="Docente.php">Docente</a>
                    </li>
                    <li><a href="Administrativo.php">Administrativo</a>
                    </li>
                    <li><a href="Externo.php">Externo</a>
                    </li>
                  </ul>
                </li>   <li><a href="GrupoInvestigacion.php"><i class="fa fa-group"></i> Grupos Investigacion </a>
                </li>
                <li><a href="historial.php"><i class="fa fa-database"></i>Historial</a></li>
                <li><a><i class="fa fa-file-text"></i> Generar Reportes <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="ReporteFecha.php">Fecha</a>
                    </li>
                    <li><a href="ReporteSalas.php">Salas</a>
                    </li>
                    <li><a href="ReporteUsuario.php">Usuarios</a>
                    </li>
                    <li><a href="ReporteSemillero.php">Semillero</a>
                    </li>
                  
                  </ul>
                </li><li><a><i class="fa fa-pie-chart"></i> Estadisticas <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="EstadisticaSalasFecha.php">Entrada Sala</a>
                    </li>
                    <li><a href="EstadisticaSemillerofecha.php">Entrada Semillero</a>
                    </li>
                    <li><a href="EstadisticaTipoUsuario.php">Entrada TipoUsuario</a>
                    </li>
                  </ul>
                </li>                
              </ul>
            </div>
            
          </div>
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                   <img src="../images/sistemas.jpg" alt=""><?php echo $_SESSION['usuario']?>    
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                    <li><a href="finalSession.php"><i class="fa fa-sign-out pull-right"></i> cerrar sesion</a>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
      
                    

