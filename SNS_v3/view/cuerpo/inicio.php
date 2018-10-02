<br><br>
<div id="main">
      <div class="container">
        <br>
        <?php 
    //   $ingreso = new MvcController();
    //   $ingreso -> ingresoUsuarioController();
    //   if(isset($_GET["action"])){

    //   if ($_GET["action"]=="ok") {
    //       echo"registro exitoso";
    //   }
    //   }
    ?>
       <br>
        <div id="slider-home" class="carousel slide" data-ride="carousel">
      <div id="de" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="view/i/11.jpg" width="100%" height="450">
            <div class="carousel-caption">

                      <h2>SNS</h2>
                      <img src="view/i/tools.png" height="500" >
                      <p class="h4">Gestiona las novedades de los aprendices </p>
                      <p>desde cualquier sitio</p>
                      <!-- <a href="#" class="btn btn-secondary">ingr</a> -->

                    </div>
          </div>
          <div class="carousel-item">
            <img src="view/i/101.jpg" width="100%" height="450">
            <div class="carousel-caption">

                      <h2>Quienes somos </h2>
                      <img src="view/i/descarga.jpg" height="500" >
                      <br>
                      <br>
                      <p class="h4">Grupo de jovenes que buscan mejorar el control de novedades a traves de un sistema de informacion </p>
                      <p>Analisis y desarrollo de sistemas de informacion</p>
                      <!-- <a href="#" class="btn btn-secondary">ingr</a> -->

                    </div>
          </div>
          <div class="carousel-item">
            <img src="view/i/8.jpg"   width="100%" height="450">
            
          </div>
            
        </div>
        
       
        <a class="carousel-control-prev" href="#de" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#de" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>

      </div>
    <br><br><br>
    <h2 align="center">Iniciar Sesión</h2>

     <!-- formulario -->
     
     <!-- <form method="POST" action="index.php?url=persona/ingresar"> -->
     <?php 
      
      if(isset($_POST["documento"])){
        include('controller/personaController.php');
        $ingreso = new PersonaController();
        $ingreso -> ingresar();
      }
    ?>
     <form method="POST">
       <div id="dem" class="collapse"> 
     <div class="container">
      <div class="form-group">
      <label for="usr">numero de documento </label>
      <input type="text" class="form-control" name="documento" autocomplete="off" required>
      <label>Tipo de Documento</label>
              <select class="form-control" name="fk_tipo_documento">
              <?php

              foreach ($t_d as $t) {
                echo'
                  <option value='.$t->id_tipo_documento.'>'.$t->tipo_documento.'</option>
                ';
              }
              
              ?>
              </select>
      <label for="usr">contraseña</label>
      <input type="password" class="form-control" name="contrasena"autocomplete="off" >
    </div> 
    <button type="submit" class="btn btn-info">Iniciar Sesión</button>
    </form>      
    
     </div>
     <br>
   </div>
   <center>
    <button  type="button" class="btn btn-dark" data-toggle="collapse" data-target="#dem" >Ingresar</button> 
   <br>
        </center>
        <br><br>
 </div>
    <br>     

    