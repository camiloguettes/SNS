<div id="main">
    <div class="container">
      <br>
      <?php include 'view/cuerpo/nav3.php';
			if (isset($_POST["ciudad"])) {
				$registro = new CiudadController();
				$registro -> registrarciudad();
			}
			?>
    	<br>
        <h3 class="">Ingresar Ciudad</h3>
        	<br>
        	<form method="post">
        		<div class="form-group">
					<label for="usr">Ciudad</label>
	      			<input type="text" class="form-control" name="ciudad" autocomplete="off" required>
					<br>
	   			<center> <button type="submit" class="btn btn-info">Registrar ciudad</button>
	   			</center>
        	</form>                             
        <br><br>                           
    </div>  
</div>
<br><br>