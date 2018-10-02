<?php
echo '<div class="table-responsive">';
switch($_POST["id_novedad"]){
    case 1:
    // var_dump($respuesta);
    echo ' <table class="table table-striped">
        
             <thead class="thead-dark">
                  <tr align="center">
                    <th>Número de documento</th>
                    <th>Fecha de novedad</th>
                    <th>Motivo</th>
                    <th>Respuesta</th>
                    <th>Responsable</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>';
                 
                     foreach ($respuesta as $a) {
                         echo '<tr align="center">';
                         echo '<td>'.$a->fk_documento.'</td>';
                         echo '<td>'.$a->fecha_inicio.'</td>';
                         echo '<td>'.$a->motivo.'</td>';

                         switch($a->fk_id_respuesta){
                         case 1:
                         echo '<td>Aceptar</td>';
                         break;
                         case 2:
                         echo '<td>Rechazar</td>';
                         break;
                         case 3:
                         echo '<td>En proceso</td>';
                         break;
                         default:
                         echo '<td>En proceso</td>';
                         break;
                            }
                         echo '<td>'.$a->responsable.'</td>';
                         echo '<td>'.$a->responsable.'</td>';
                         echo '<td><a href="index.php?url=novedad/eliminar/'.$a->fk_documento.'">eliminar</a></td>';
                         echo '</tr>';
                     }
                  
              echo'</tbody>
                </table>';
                break;
                case 2:
    // var_dump($respuesta);
    echo ' <table class="table table-striped">
        
             <thead class="thead-dark">
                  <tr align="center">
                    <th>Número de documento</th>
                    <th>Fecha de novedad</th>
                    <th>Jornada nueva</th>
                    <th>Motivo</th>
                    <th>Respuesta</th>
                    <th>Responsable</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>';
                 
                     foreach ($respuesta as $a) {
                         echo '<tr align="center">';
                         echo '<td>'.$a->fk_documento.'</td>';
                         echo '<td>'.$a->fecha_inicio.'</td>';
                         echo '<td>'.$a->nueva_jornada.'</td>';
                         echo '<td>'.$a->motivo.'</td>';

                         switch($a->fk_id_respuesta){
                         case 1:
                         echo '<td>Aceptar</td>';
                         break;
                         case 2:
                         echo '<td>Rechazar</td>';
                         break;
                         case 3:
                         echo '<td>En proceso</td>';
                         break;
                         default:
                         echo '<td>En proceso</td>';
                         break;
                            }

                         echo '<td>'.$a->responsable.'</td>';
                         echo '<td>'.$a->responsable.'</td>';
                         echo '<td><a href="index.php?url=novedad/eliminar/'.$a->fk_documento.'">eliminar</a></td>';
                         echo '</tr>';
                     }
                  
              echo'</tbody>
                </table>';
                break;
                case 3:
    // var_dump($respuesta);
    echo ' <table class="table table-striped">
        
             <thead class="thead-dark">
                  <tr align="center">
                    <th>Número de documento</th>
                    <th>Fecha de novedad</th>
                    <th>Fallas</th>
                    <th>Motivo</th>
                    <th>Respuesta</th>
                    <th>Responsable</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>';
                 
                     foreach ($respuesta as $a) {
                         echo '<tr align="center">';
                         echo '<td>'.$a->fk_documento.'</td>';
                         echo '<td>'.$a->fecha_inicio.'</td>';
                         echo '<td>'.$a->fallas.'</td>';
                         echo '<td>'.$a->motivo.'</td>';

                         switch($a->fk_id_respuesta){
                         case 1:
                         echo '<td>Aceptar</td>';
                         break;
                         case 2:
                         echo '<td>Rechazar</td>';
                         break;
                         case 3:
                         echo '<td>En proceso</td>';
                         break;
                         default:
                         echo '<td>En proceso</td>';
                         break;
                            }

                         echo '<td>'.$a->responsable.'</td>';
                         echo '<td>'.$a->responsable.'</td>';
                         echo '<td><a href="index.php?url=novedad/eliminar/'.$a->fk_documento.'">eliminar</a></td>';
                         echo '</tr>';
                     }
                  
              echo'</tbody>
                </table>';
                break;
                case 5:
    // var_dump($respuesta);
    echo ' <table class="table table-striped">
        
             <thead class="thead-dark">
                  <tr align="center">
                    <th>Número de documento</th>
                    <th>Fecha de novedad</th>
                    <th>Motivo</th>
                    <th>Respuesta</th>
                    <th>Responsable</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>';
                 
                     foreach ($respuesta as $a) {
                         echo '<tr align="center">';
                         echo '<td>'.$a->fk_documento.'</td>';
                         echo '<td>'.$a->fecha_inicio.'</td>';
                         echo '<td>'.$a->motivo.'</td>';

                         switch($a->fk_id_respuesta){
                         case 1:
                         echo '<td>Aceptar</td>';
                         break;
                         case 2:
                         echo '<td>Rechazar</td>';
                         break;
                         case 3:
                         echo '<td>En proceso</td>';
                         break;
                         default:
                         echo '<td>En proceso</td>';
                         break;
                            }

                         echo '<td>'.$a->responsable.'</td>';
                         echo '<td>'.$a->responsable.'</td>';
                         echo '<td><a href="index.php?url=novedad/eliminar/'.$a->fk_documento.'">eliminar</a></td>';
                         echo '</tr>';
                     }
                  
              echo'</tbody>
                </table>';
                break;            
}
echo '</div>';
?>