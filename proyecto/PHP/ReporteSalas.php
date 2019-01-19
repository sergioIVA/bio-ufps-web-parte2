
        <?php
         include 'cabecera.php';
        ?>
        
         <div class="center-margin">
                <form action="procesoSalas.php" method="post">
            <button type="submit" class="btn btn-primary">Reporte por salas</button> 
                <br/>     
           <select name="aulas" id="aulas">
               <?php
                                include '../../logica/controladores/ControladorAdministrador.php';
                                $controlador=new ControladorAdministrador();
                                $result=$controlador->mostrarAulaNombre();
                                       $i=0;
                                       while($r=  mysqli_fetch_array($result)){
                                                echo "<option name=\"".$i."\" value=\"".$r['Nombre_Aula']."\">".$r['Nombre_Aula']."</option>";
                                            $i++;    
                                     }
               ?>
              </select>
              <form/>
              </div>
        <?php
         include 'finalPagina.php';
        ?>