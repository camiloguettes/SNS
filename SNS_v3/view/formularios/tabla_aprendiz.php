<?php 

//$aa=$this->consultar1aprendizModel();
?>
<div class="table-responsive">
        <table class="table table-striped">
            
        </thead>
        <thead class="thead-dark">
                  <tr align="center">
                    <th>Número de documento</th>
                    <th>Primer nombre</th>
                    <th>Segundo nombre</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                    <th>Correo</th>
                    <th>Ficha de formación</th>
                    <th>Tipo de documento</th>
                  </tr>
                </thead>
                <tbody>
                    
                   <?php
                     
                     foreach ($respuesta as $app) {
                         echo "<tr>";
                         echo '<td>'.$app->documento.'</td>';
                         echo '<td>'.$app->primer_nombre.'</td>';
                         echo '<td>'.$app->segundo_nombre.'</td>';
                         echo '<td>'.$app->primer_apellido.'</td>';
                         echo '<td>'.$app->segundo_apellido.'</td>';
                         echo '<td>'.$app->correo.'</td>';
                         echo '<td>'.$app->fk_ficha.'</td>';
                         echo '<td>'.$app->tipo_documento.'</td>';
                         echo "</tr>";
                     }
                  ?>
                </tbody>
                </table>
    </div>         

        <br><br>                           