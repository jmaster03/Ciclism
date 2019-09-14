<h2 class="text-center mb-4">Registrar nuevo usuario</h2>



<?php
		$this->load->library('form_validation');

		echo validation_errors(); ?>

		<?php echo form_open('Main_admin/saveUsuario') ?>

		

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
			<label class="text-dark pt-2">Fecha de nacimiento</label>
			<input type="date" id="" name="fecha_Naci" class="form-control mb-4" placeholder="Cedula">


			<div>
				<label class="text-dark pt-2">Grupo</label>
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

			<div>
				<label class="text-dark pt-2">Nivel</label>
				<select id="tipo" name="tipo" class="custom-select" required>
					<option value="" selected></option>
					<option value="12" selected>Usuario</option>
					<option value="43" selected>Admin</option>
				</select>
			</div>

			<!-- Sign up button -->
			<button class="btn btn-primary my-4 btn-block" type="submit">Registrar</button>
			<hr>
			
		</form> 
		<!-- Default form register -->
