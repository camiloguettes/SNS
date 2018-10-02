<div id="main">
    <div class="container">
      <br>
      <?php
			if (isset($_POST["documento"])) {
				$registro = new PersonaController();
				$registro -> registrar();
			}
			?>
    	<br>
        <h3 class="">Regístrate</h3>
        	<br>
        	<form method="post">
        		<div class="form-group">
						<label for="usr">N&uacute;mero de documento</label>
	      			<input type="text" class="form-control" name="documento" autocomplete="off" required>
	      			<label>Tipo de Documento</label>
      				<select class="form-control" name="fk_tipo_documento">
						<option value="1">Cédula de ciudadanía</option>
						<option value="2">Cédula de extranjería</option>
						<option value="3">Tarjeta de identidad</option>
						<option value="4">Pasaporte</option>
              		</select>
	      			<label for="usr">Primer Nombre</label>
	      			<input type="text" class="form-control" name="primer_nombre" autocomplete="off" required>
	      			<label for="usr">Segundo Nombre</label>
	      			<input type="text" class="form-control" name="segundo_nombre" autocomplete="off">
	      			<label for="usr">Primer Apellido</label>
	      			<input type="text" class="form-control" name="primer_apellido" autocomplete="off" required>
	      			<label for="usr">Segundo Apellido</label>
	      			<input type="text" class="form-control" name="segundo_apellido" autocomplete="off">
      				<label for="usr">Correo</label>
      				<input type="email" class="form-control" name="correo" autocomplete="off" required  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="ejemplo@mail.com" >
      				<label for="usr">Contrase&ntilde;a</label>
     			 	<input type="password" class="form-control" name="contrasena" id="pass1" autocomplete="off" required>
							<label for="usr">Contrase&ntilde;a</label>
     			 	<input type="password" class="form-control" name="contrasena2" id="pass2" autocomplete="off" required>
	   			</div>
	   			<center> <button type="submit" class="btn btn-info" id="botoon" disabled>Registrar</button>
	   			</center>
					 <span id="error2"></span>
        	</form>                             
        <br><br>                           
    </div>  
</div>
<br><br>
