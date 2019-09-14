<title>BirkersRD - Access </title>

<div class="container my-5 py-5">
	<div id="login" class="text-center text-primary">
		<h2>Login</h2>

		<?php
		$this->load->library('form_validation');

		echo validation_errors(); ?>

		<?php echo form_open('auth/login') ?>

		<!-- Email -->
		<input type="email" class="form-control mb-4" placeholder="E-mail" name="correo" required>

		<!-- Password -->
		<input type="password" class="form-control mb-4" placeholder="Contraseña" name="password" required>

		<!-- Sign in button -->
		<button class="btn btn-primary btn-block my-4" type="submit">Iniciar sesion</button>
		<hr>
		<!-- Register -->
		<a id="regBtn">¿Aun no estas registrado?</a>

		</form>
		<!-- Default form login -->
	</div>


	<div id="register" class="text-center">


		<?php
		$this->load->library('form_validation');

		echo validation_errors(); ?>

		<?php echo form_open('auth/saveUsuario') ?>

		<h2 class="text-primary">Registro</h2>

		<!-- Default form register -->
		<form class="text-center p-5" action="#!">


			<div class="form-row mb-4">
				<div class="col">
					<!-- First name -->
					<input type="text" id="" name="nombre" class="form-control" placeholder="Nombres">
				</div>
				<div class="col">
					<!-- Last name -->
					<input type="text" id="" name="apellido" class="form-control" placeholder="Apellidos">
				</div>
			</div>

			<!-- E-mail -->
			<input type="text" id="" name="cedula" class="form-control mb-4" placeholder="Cedula">

			<!-- E-mail -->
			<input type="email" id="" name="correo" class="form-control mb-4" placeholder="Correo">

			<!-- Password -->
			<input type="password" id="" name="password" class="form-control mb-4" placeholder="Contraseña">

			<!-- Password -->
			<input type="password" id="" name="password2" class="form-control mb-4" placeholder="Repita la contraseña">

			<!-- E-mail -->
			<small class="text-white pt-2">Fecha de nacimiento</small>
			<input type="date" id="" name="fecha_Naci" class="form-control mb-4" placeholder="Cedula">


			<div>
				<small class="text-white pt-2">Grupo</small>
				<select id="grupo" name="grupo" class="custom-select" required>
					<option value="" selected></option>
					<?php 
						$rs = Listado::listadoGrupo();
						foreach($rs as $grupos){
							echo "
								<option value='{$grupos->idGrupo}'>{$grupos->nombre_g}</option>
							";
						}
					?>
			
				</select>
			</div>

			<input type="hidden" name="tipo" value="12">

			<!-- Sign up button -->
			<button class="btn btn-primary my-4 btn-block" type="submit">Registrarme</button>
			<hr>
			<!-- login -->
			<a id="logBtn" class="text-primary">¿Ya posees una cuenta?</a>
		</form>
		<!-- Default form register -->
	</div>

</div>
