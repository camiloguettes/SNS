<div id="main">
    <div class="container">
      <?php
	    include 'view/cuerpo/nav3.php ';        
      ?>
        <h3 class="">Ingresar novedad</h3>
        	<br>
          <?php

          if(isset($_POST["id_novedad"])){
            $this->registrarnovedad();
          }

          ?>
        	<form method="post">
            <label>Seleccione novedad</label>
              <select class="form-control" name="id_novedad" id="select">
                <?php
                $novedades=$this->all();
                foreach ($novedades as $n) {
                  echo '<option value='.$n["id_tipo_novedad"].'>'.$n["tipo_novedad"].'</option>';
                }
                ?>
              </select> 

            <label>Seleccione aprendiz</label>
              <select class="form-control" name="fk_documento" id="select">
                <?php
                $novedades=new superconsultaModel;
                $n=$novedades-> consultaraprendiz();
                foreach ($n as $n) {
                  echo '<option value='.$n->documento.'>'.$n->documento.'</option>';
                }
                ?>
              </select>

              <div id="pai">
                        <div id="3">
                            <label for="usr">Fallas</label>
                            <input type="number" class="form-control" name="fallas" autocomplete="off">
                        </div>

                        <div id="2">
                            <label for="usr">nueva jornada</label>
                            <select class="form-control" name="nueva_jornada">
                            <option value="Diurna">Diurna</option>
                            <option value="Nocturna">Nocturna</option>
                            <option value="Madrugada">Madrugada</option>
                          </select>
                        </div>

                        <div id="4">
                            <label for="usr">sede reintegro</label>
                            <select class="form-control" name="nueva_sede" id="sede_reintegro">
                              <?php
                              $novedades=new superconsultaModel;
                              $n=$novedades-> consultartodo('sede');
                              foreach ($n as $n) {
                                echo '<option value='.$n->id_sede.'>'.$n->sede.'</option>';
                              }
                              ?>
                
                        </select>
                        </div>

                        <div id="6">
                            <label for="usr">sede traslado</label>
                            <select class="form-control" name="sede_traslado" id="sede_traslado">
                            <?php
                              $novedades=new superconsultaModel;
                              $n=$novedades-> consultartodo('sede');
                              foreach ($n as $n) {
                                echo '<option value='.$n->id_sede.'>'.$n->sede.'</option>';
                              }
                              ?>
                
                      </select>
                        </div>


                    



	      			<label for="usr">Fecha</label>
	      			<input type="date" class="form-control" name="fecha_inicio" autocomplete="off">
	      			<label for="usr">Motivo</label>
	      			<textarea class="form-control" name="motivo" autocomplete="off" required></textarea>
	      			<!-- <label for="usr" >Respuesta</label>
	      			<select class="form-control" name="respuesta">
                 <?php/*
                              $novedades=new superconsultaModel;
                              $n=$novedades-> consultar_respuesta();
                              foreach ($n as $n) {
                                echo '<option value='.$n->id_respuesta.'>'.$n->respuesta.'</option>';
                              }*/
                              ?>
               </select> -->
     			 	
	   			</div>
	   			<center> <button type="submit" class="btn btn-info mt-3 mb-3">Registrar novedad</button>
	   			</center>
        	</form>                             
                              
    </div>  
</div>
<br><br>
