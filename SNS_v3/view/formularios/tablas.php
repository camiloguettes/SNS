<div class="table-responsive">
<table class="table table-striped">
        <thead class="thead-dark">
                  <tr align="center">
                    <th>Número de documento</th>
                    <th>Fecha de novedad</th>
                    <th>Sede de traslado</th>
                    <th>Motivo</th>
                    <th>Respuesta</th>
                    <th>Responsable</th>
                  </tr>
                </thead>
                <tbody>
                 <?php
                     // var_dump($a);
                     foreach ($respuesta as $a) {
                         echo '<tr align="center">';
                         echo '<td>'.$a->fk_documento.'</td>';
                         echo '<td>'.$a->fecha_inicio.'</td>';
                         echo '<td>'.$a->sede.'</td>';
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
                         echo '</tr>';
                     }
                  ?>
                </tbody>
            </table>
    </div>