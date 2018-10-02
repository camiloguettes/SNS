<?php
 switch ($_SESSION["rol"]) {
    case 1:
    include('view/cuerpo/nav3.php');
    break;
    case 2:
            include('view/cuerpo/nav3.php');
    break;
    case 3:
            include('view/cuerpo/nav2.php');
    break;
    case 4:
            include('view/cuerpo/nav4.php');
    break;
    default:
    header('location:index.php');
    break;


 }
?>
<div id="main">
    <div class="container">
      <br>
      
    	<br>
        <h3 class="">Buscar Novedad</h3>
        	<br>
        	<form method="post">
        		<div class="form-group">
                    <label>Seleccione novedad</label>
              <select class="form-control" name="id_novedad" id="select">
                <?php
                    $novedades=$this->all();
                    foreach ($novedades as $n) {
                      echo '<option value='.$n["id_tipo_novedad"].'>'.$n["tipo_novedad"].'</option>';
                    }
                ?>
              </select> 
					 <label for="usr">Documento del aprendiz</label>
	      			<input type="text" class="form-control" name="documento" autocomplete="off" required>
					<br> 
	   			<center> <button type="submit" class="btn btn-info mb-5">Buscar</button>
	   			</center>
        	</form>
            <?php 
            if (isset($_POST["id_novedad"])) {
                $registro = new NovedadController();
                $registro -> consultar1novedad();
            }
            ?>
            <div class="table-responsive">
<div id="pai">
    <div id="1">
        <table class="table table-striped">
        
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
                <tbody>
                  <?php
                    $a= $this->consultarnovedad('1');
                     // var_dump($a);
                     foreach ($a as $a) {
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
                  ?>
                </tbody>
                </table>
    </div>
    <div id="2">
        <table class="table table-striped">
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
                <tbody>
                  <?php
                    $a= $this->consultarnovedad('2');
                     // var_dump($a);
                     foreach ($a as $a) {
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
                  ?>
                </tbody>
                </table>
    </div>
    <div id="3">
        <table class="table table-striped">
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
                <tbody>
                   <?php
                    $a= $this->consultarnovedad('3');
                     // var_dump($a);
                     foreach ($a as $a) {
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
                  ?>
                </tbody>
                </table>
    </div>
    <div id="4">
        <table class="table table-striped">
        <thead class="thead-dark">
                  <tr align="center">
                    <th>Número de documento</th>
                    <th>Fecha de novedad</th>
                    <th>Sede de reintegro</th>
                    <th>Motivo</th>
                    <th>Respuesta</th>
                    <th>Responsable</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $a= $this->consultarnovedadS('4');
                     // var_dump($a);
                     foreach ($a as $a) {
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
                         echo '<td>'.$a->responsable.'</td>';
                         echo '<td><a href="index.php?url=novedad/eliminar/'.$a->fk_documento.'">eliminar</a></td>';
                         echo '</tr>';
                     }
                  ?>
                </tbody>
                </table>
    </div>
    <div id="5">
        <table class="table table-striped">
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
                <tbody>
                   <?php
                    $a= $this->consultarnovedad('5');
                     // var_dump($a);
                     foreach ($a as $a) {
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
                  ?>
                </tbody>
                </table>
    </div>
    <div id="6">
        <table class="table table-striped">
        <thead class="thead-dark">
                  <tr align="center">
                    <th>Número de documento</th>
                    <th>Fecha de novedad</th>
                    <th>Sede de traslado</th>
                    <th>Motivo</th>
                    <th>Respuesta</th>
                    <th>Responsable</th>
                    <th>Actualizar</th>
                    <th>Eliminar</th>
                  </tr>
                </thead>
                <tbody>
                 <?php
                    $a= $this->consultarnovedadS('6');
                     // var_dump($a);
                     foreach ($a as $a) {
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
                         echo '<td>'.$a->responsable.'</td>';
                         echo '<td><a href="index.php?url=novedad/eliminar/'.$a->fk_documento.'">eliminar</a></td>';
                         echo '</tr>';
                     }
                  ?>
                </tbody>
            </table>
    </div>
    
</div>
                
    </div>         

        <br><br>                           
    </div>  
</div>
