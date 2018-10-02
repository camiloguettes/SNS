<div id="main">
	<div class="container">
		<h2><center>Perfil</h2>	
		<div class="row">
			<div class="col-md-4">
			<table class="table">
			  <thead class="thead-dark ">
			    <tr>
			      <th scope="col" colspan="2"><center>Datos</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <th scope="row">Nombre</th>
			      <td>
			      	<?php echo $_SESSION["nombre"]; ?>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">Documento</th>
			      <td>
						<?php echo $_SESSION["documento"]; ?>
			      </td>
			    </tr>
			    <tr>
			      <th scope="row">Tipo de Documento</th>
			      <td>
						<?php
							switch ($_SESSION["fk_tipo_documento"]) {
								case 1:
								echo 'cc';
								break;
								case 2:
								echo 'ce';
								break;
								case 3:
								echo 'ti';
								break;
								case 4:
								echo 'pa';
								break;
								default:
								header('location:index/index');
								break;
							 }
						?>			      	
			      </td>
			    </tr>
				<tr>
			      <th scope="row">Rol</th>
			      <td>
						<?php
						switch ($_SESSION["rol"]) {
							case 1:
							echo 'Administrador';
							break;
							case 2:
							echo 'Apoyo Administrador';
							break;
							case 3:
							echo 'instructor';
							break;
							default:
							header('location:index/index');
							break;
					 }
						?>
						</td>
			    </tr>
			  </tbody>
			</table>	
			</div>
			<div class="col-md-8">
				<nav class="navbar navbar-expand-sm bg-light navbar-secondary" align="center">
				  <ul class="navbar-nav">
				    <li class="nav-item active">
				      <a class="nav-link" href="index.php?url=persona/link/cambiarcontrasena">Cambiar Contraseña</a>
				    </li>
				    
				    <li class="nav-item">
				      <a class="nav-link" href="index.php?url=persona/link/consultar_aprendiz">Consultar Aprendiz</a>
				    </li>
						<li class="nav-item">
				      <a class="nav-link" href="index.php?url=permiso/link/permiso">Dar permisos</a>
				    </li>
				    <li class="nav-item">
				      <a class="nav-link" href="index.php?url=rol/link/rol">Roles</a>
				    </li>				    
				  </ul>
				</nav>
				<center>En esta página podrás cambiar tus datos personales o actualizar los datos de los aprendices que esten registrados en el sistema

			</div>
		</div>

	</div>
</div>