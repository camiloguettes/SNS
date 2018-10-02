<div id="main">
    <div class="container">
      <br>
      <h3 align="center">Consultar aprendiz</h3>
    	<br>
        <form method="post">
            <div class="form-group">
                <label>Número de documento</label>
            <input type="text" name="documento" class="form-control">
            <br>
            <center>
            <button type="submit" class="btn btn-info">Buscar</button>
        </center>
        </div>
<?php
if(isset($_POST["documento"])){
$aprendiz= new PersonaController();
$aprendiz-> consultar1aprendiz();
}
?>
        </form>
        <br>
            <?php 
                $aprendiz= new superconsultaModel();
                   $a=$aprendiz-> consultaraprendiz();
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
                     // var_dump($a);
                     foreach ($a as $ap) {
                         echo "<tr>";
                         echo '<td>'.$ap->documento.'</td>';
                         echo '<td>'.$ap->primer_nombre.'</td>';
                         echo '<td>'.$ap->segundo_nombre.'</td>';
                         echo '<td>'.$ap->primer_apellido.'</td>';
                         echo '<td>'.$ap->segundo_apellido.'</td>';
                         echo '<td>'.$ap->correo.'</td>';
                         echo '<td>'.$ap->fk_ficha.'</td>';
                         echo '<td>'.$ap->tipo_documento.'</td>';
                         echo "</tr>";
                     }
                  ?>
              
                </tbody>
                </table>
                
    </div>         

        <br><br>                           
    </div>  
</div>