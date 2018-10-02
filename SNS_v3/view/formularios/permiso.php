<div id="main">
    <div class="container">
      <br>
<?php include 'view/cuerpo/nav3.php'; 
if (isset($_POST["documento"])) {
    $registro = new PermisoController();
    $registro -> registrarpermiso();
}?>
<br>
<h3 class="">Permiso</h3>
        	<br>
        	<form method="post">
        		<div class="form-group">
                    <label for="rol">Ingrese el documento</label>
                    <input type="text" name="documento" class="form-control">
                    <br>
	   			<center> <button type="submit" class="btn btn-info" id="botoon" >Registrar</button>
	   			</center>
					 <span id="error2"></span>
        	</form>                             
        <br><br>                           
    </div>  
</div>
<br><br>
