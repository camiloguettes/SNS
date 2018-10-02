<div id="main">
    <div class="container">
      <br>
      <?php
      include 'view/cuerpo/nav3.php';
			if (isset($_POST["documento"])) {
				$registro = new RolController();
				$registro -> asignarrol();
			}
			?>
    	<br>
        <h3 class="">Regístrate</h3>
        	<br>
        	<form method="post">
        		<div class="form-group">
                    <label for="rol">seleccione rol</label>
                    <select class="form-control" name="rol">
                      <?php
                      
                      $rol=$this->all();
                        foreach ($rol as $t) {
                            if ($t->tipo_rol!='0') {
                                echo'
                                <option value='.$t->id_tipo_rol.'>'.$t->tipo_rol.'</option>
                                ';    
                            }else{
                                
                            }
                            
                        }
                      
                      ?>
                      </select>
                      <label for="documento">seleccione documento</label>
                      <select class="form-control" name="documento">
                      <?php
                      
                      $doc=$this->alld();
                        foreach ($doc as $t) {
                            echo'
                            <option value='.$t->documento.'>'.$t->documento.'</option>
                            ';
                        }
                      
                      ?>
                      </select>
	   			<center> <button type="submit" class="btn btn-info" id="botoon" >Registrar</button>
	   			</center>
					 <span id="error2"></span>
        	</form>                             
        <br><br>                           
    </div>  
</div>
<br><br>