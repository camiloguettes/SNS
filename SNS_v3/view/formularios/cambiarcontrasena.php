<?php
    switch ($_SESSION["rol"]) {
        case 1:
        include('view/cuerpo/nav3.php');
        break;
        case 2:
                include('view/cuerpo/nav3.php');
        break;
        case 3:
                include('view/cuerpo/nav2.php');
        break;
        case 4:
                include('view/cuerpo/nav4.php');
        break;
        default:
        header('location:index.php');
        break;


    }
?>
<div id="main">
	<div class="container">
		<h2><center>Cambiar Contraseña</h2>	
        <?php
        if (isset($_POST["contrasena"])) {
            $cambiar= new PersonaController;
            $cambiar->cambiarContra();
        }
        ?>
		<form method="post">
        		<div class="form-group">
                <label for="usr">Contrase&ntilde;a</label>
     			 	<input type="password" class="form-control" name="contrasena" id="pass" autocomplete="off" required>
							<label for="usr">Nueva Contraseña</label>
     			 	<input type="password" class="form-control" name="contrasena2" id="pass2" autocomplete="off" required>
                      <label for="usr">Confirme Contraseña</label>
     			 	<input type="password" class="form-control" name="contrasena1" id="pass1" autocomplete="off" required>
	   			<center> <button type="submit" class="btn btn-info mt-3 mb-3" id="botoon" disabled>Registrar</button>
	   			</center>
                   <span id="error2"></span>
        	</form>
	</div>
</div>