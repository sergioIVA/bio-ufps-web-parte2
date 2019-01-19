
<?php
include 'cabecera.php';
?>

<div class="center-margin">
    
    <form action="procesoUsuario.php" method="post">
            <button type="submit" class="btn btn-primary">Reporte por Usuario</button> 
                <br/>     
           <select name="usuarios" id="aulas">
              <option value="Estudiante">Estudiante</option>
              <option value="Docente">Docente</option> 
              <option value="Administrativo">Administrativo</option>
              <option value="Externo">Externo</option> 
              </select>
              <form/>
</div>
<?php
include 'finalPagina.php';
?>