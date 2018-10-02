<div id="main">
    <div class="container">
      <br>
      <?php include 'view/cuerpo/nav3.php';
			if (isset($_POST["documento"])) {
				$registro = new PersonaController();
				$registro -> registraraprendiz();
			}
			?>
    	<br>
        <h3 class="">Registrar aprendiz</h3>
        	<br>
        	<form method="post">
        		<div class="form-group">
                <label for="usr">Tipo de documento</label>
                    <select class="form-control" name="tipo_documento">
                    <?php
                    foreach ($doc as $t) {
                    echo'
                    <option value='.$t->id_tipo_documento.'>'.$t->tipo_documento.'</option>';
                    }
                    ?>
                    </select>
					<label for="usr">Documento</label>
	      			<input type="text" class="form-control" name="documento" autocomplete="off" required>
                    <label for="usr">Primer nombre</label>
	      			<input type="text" class="form-control" name="primer_nombre" autocomplete="off" required>
                    <label for="usr">Segundo nombre</label>
                    <input type="text" class="form-control" name="segundo_nombre" autocomplete="off">
                    <label for="usr">Primer apellido</label>
                    <input type="text" class="form-control" name="primer_apellido" autocomplete="off" required>
                    <label for="usr">Segundo apellido</label>
                    <input type="text" class="form-control" name="segundo_apellido" autocomplete="off">
                    <label for="usr">Correo</label>
                    <input type="text" class="form-control" name="correo" autocomplete="off" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required>
                    <label for="usr">Ficha de formación</label>
                    <select class="form-control" name="ficha">
                    <?php
                    foreach ($f as $t) {
                    if ($t->codigo_ficha!='0') {
                    echo'
                    <option value='.$t->codigo_ficha.'>'.$t->codigo_ficha.'</option>';
                    }else{

                    }
                    }
                    ?>
                    </select>
					<br>
	   			<center> <button type="submit" class="btn btn-info">Registrar aprendiz</button>
	   			</center>
        	</form>                             
        <br><br>                           
    </div>  
</div>
<br><br>