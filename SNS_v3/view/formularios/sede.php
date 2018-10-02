<div id="main">
    <div class="container">
      <br>
      <?php include 'view/cuerpo/nav3.php';
			if (isset($_POST["sede"])) {
				$registro = new SedeController();
				$registro -> registrarsede();
			}
			?>
    	<br>
        <h3 class="">Ingresar sede</h3>
        	<br>
        	<form method="post">
        		<div class="form-group">
					<label for="usr">Sede</label>
	      			<input type="text" class="form-control" name="sede" autocomplete="off" required>
                    <label for="usr">Ciudad</label>
                    
                  
                    <select class="form-control" name="ciudad">
                    <?php
                    $doc=new superconsultaModel;
                    $c=$doc->consultartodo('ciudad');
                    // print_r($c);
                    foreach ($c as $t) {
                    echo'
                    <option value='.$t->id_ciudad.'>'.$t->ciudad.'</option>';
                    }
                      ?>
                    </select>
					<br>
	   			<center> <button type="submit" class="btn btn-info">Registrar sede</button>
	   			</center>
        	</form>                             
        <br><br>                           
    </div>  
</div>
<br><br>