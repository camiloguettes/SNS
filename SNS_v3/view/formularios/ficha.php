<div id="main">
    <div class="container">
      <br>
      <?php include 'view/cuerpo/nav3.php';
			if (isset($_POST["ficha"])) {
				$registro = new FichaController();
				$registro -> registrarficha();
			}
			?>
    	<br>
        <h3 class="">Ingresar ficha</h3>
        	<br>
        	<form method="post">
        		<div class="form-group">
					<label for="usr">Número de ficha</label>
	      			<input type="text" class="form-control" name="ficha" autocomplete="off" required>
                    <label for="usr">Sede</label>
                    <select class="form-control" name="sede">
                    <?php
                    $c=new superconsultaModel;
                    $doc=$c->consultartodo('sede');
                    foreach ($doc as $t) {
                    echo'
                    <option value='.$t->id_sede.'>'.$t->sede.'</option>';
                    }
                    ?>
                    </select>
                    <label for="usr">Jornada</label>
                    <select class="form-control" name="jornada">
                    <?php
                    $doc=$c->consultartodo('jornada');
                    foreach ($doc as $t) {
                    echo'
                    <option value='.$t->id_jornadas.'>'.$t->jornada.'</option>';
                    }
                    ?>
                    </select>
                    <label for="usr">Tipo de formación</label>
                    <select class="form-control" name="tipo_formacion">
                    <?php
                    $doc=$c->consultartodo('tipo_de_formacion');
                    foreach ($doc as $t) {
                    echo'
                    <option value='.$t->id_tipos_de_formacion.'>'.$t->tipos_de_formacion.'</option>';
                    }
                    ?>
                    </select>
                    <label for="usr">Modalidad</label>
                    <select class="form-control" name="modalidad">
                    <?php
                    $doc=$c->consultartodo('modalidad');
                    foreach ($doc as $t) {
                    echo'
                    <option value='.$t->id_modalidades.'>'.$t->tipo_modalidad.'</option>';
                    }
                    ?>
                    </select>
                    <label for="usr">Programa de formación</label>
                    <select class="form-control" name="programa_formacion">
                    <?php
                    $doc=$c->consultartodo('programas_formacion');
                    foreach ($doc as $t) {
                      if ($t->programa_formacion!='0') {
                    echo'
                    <option value='.$t->id_programa_formacion.'>'.$t->programa_formacion.'</option>';
                    }else{

                    }
                  }
                    ?>
                    </select>
                    <label for="usr">Trimestre de formación</label>
	      			<select name="trimestre_formacion" class="form-control">
              <option value="1">Trimestre 1</option>
              <option value="2">Trimestre 2</option>
              <option value="3">Trimestre 3</option>
              <option value="4">Trimestre 4</option>
              <option value="5">Trimestre 5</option>
              <option value="6">Trimestre 6</option>
              <option value="7">Trimestre 7</option>
              <option value="8">Trimestre 8</option>
              </select>
	   			</div>
	   			<center> <button type="submit" class="btn btn-info">Registrar ficha</button>
	   			</center>
        	</form>                             
        <br><br>                           
    </div>  
</div>
<br><br>