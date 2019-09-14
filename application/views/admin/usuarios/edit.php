<h2 class="text-center mb-4">Editar usuario - <b><?= $usuario->nombre ?></b> </h2>



<?php
$this->load->library('form_validation');
echo validation_errors();


if ($usuario->foto_U === 'noimage.jpg') {
	$imageR = base_url('files/img/static/noimage.jpg');
} else {
	$imageR = (base_url() . 'files/img/usuarios/' . $usuario->foto_U);
}




?>

<div class="text-center mb-4">
	<label>Foto de perfil</label>
	<br>
	<img src="<?= $imageR ?>" style="width:96px;">
</div>

<?php echo form_open('Main_admin/updateUsuario') ?>
<input type="hidden" name="idUsuario" value="<?= $usuario->idUsuario ?>">

<div class="form-row mb-4">
	<div class="col">
		<!-- First name -->
		<input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombres" value="<?= $usuario->nombre ?>">
	</div>
	<div class="col">
		<!-- Last name -->
		<input type="text" id="apellido" name="apellido" class="form-control" placeholder="Apellidos" value="<?= $usuario->apellido ?>">
	</div>
</div>

<!-- E-mail -->
<input type="text" id="cedula" name="cedula" class="form-control mb-4" placeholder="Cedula" value="<?= $usuario->cedula ?>">

<!-- E-mail -->
<input type="email" id="correo" name="correo" class="form-control mb-4" placeholder="Correo" value="<?= $usuario->correo ?>">

<!-- Password -->
<input type="password" id="password" name="password" class="form-control mb-4" placeholder="Contraseña" value="<?= $usuario->password ?>">

<!-- Password -->
<input type="password" id="password2" name="password2" class="form-control mb-4" placeholder="Repita la contraseña" value="<?= $usuario->password ?>">

<!-- E-mail -->
<label class="text-dark pt-2">Fecha de nacimiento</label>
<input type="date" id="fecha_Naci" name="fecha_Naci" class="form-control mb-4" value="<?= $usuario->fecha_Naci ?>">


<div>
	<label class="text-dark pt-2">Grupo</label>
	<select id="grupo" name="grupo" class="custom-select" required>
		<option value="<?= $usuario->grupo ?>" selected disabled><?= $usuario->nombre_g ?></option>
		<?php
		$rs = Listado::listadoGrupo();
		foreach ($rs as $grupos) {
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
		<option value="<?= $usuario->tipo ?>" selected><?= $usuario->tipo ?></option>
		<option value="12">Usuario</option>
		<option value="43">Admin</option>
	</select>
</div>

<!-- Sign up button -->
<button class="btn btn-primary my-4 btn-block" type="submit">Actualizar</button>
<hr>

</form>
<!-- Default form register -->
