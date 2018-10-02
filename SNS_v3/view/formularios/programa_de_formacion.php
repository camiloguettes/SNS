<div id="main">
    <div class="container">
      <br>
      <?php include 'view/cuerpo/nav3.php';
			if (isset($_POST["programa_formacion"])) {
				$registro = new ProgramaController();
				$registro -> registrarprogramaformacion();
			}
			?>
    	<br>
        <h3 class="">Ingresar Programa</h3>
        	<br>
        <form method="post">
        		<div class="form-group">
					<label for="usr">Programa de formación (Nombre del programa completo)</label>
	      			<input type="text" class="form-control" name="programa_formacion" autocomplete="off" required>
					<br>
	   			<center> <button type="submit" class="btn btn-info">Registrar programa de formación</button>
	   			</center>
        	</form>                             
        <br><br>                           
    </div>  
</div>
<br><br>