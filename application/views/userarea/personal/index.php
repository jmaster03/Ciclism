<h2 class="text-center">Mi informacion</h2>


<?php
if ($usuario->foto_U === 'noimage.jpg') {
	$imageR = base_url('files/img/static/noimage.jpg');
} else {
	$imageR = (base_url() . 'files/img/usuarios/' . $usuario->foto_U);
}

?>


<?php
$this->load->library('form_validation');

echo validation_errors(); ?>

<?php echo form_open_multipart('main_usuario/updatemyUsuario') ?>


<input type="hidden" name="idUsuario" value="<?= $usuario->idUsuario ?>">

<div class="text-center"> 
	<label>Foto de perfil</label>
	<br>
	<img src="<?= $imageR ?>" style="width:96px;">
</div>


<div class="form-group">
	<label for="cedula">Cedula</label>
	<input type="text" id="cedula" class="form-control" name="cedula" value="<?= $usuario->cedula ?>">
</div>

<div class="form-group">
	<label for="nombre">Nombre</label>
	<input type="text" id="nombre" class="form-control" name="nombre" value="<?= $usuario->nombre ?>">
</div>

<div class="form-group">
	<label for="apellido">Apellido</label>
	<input type="text" id="apellido" class="form-control" name="apellido" value="<?= $usuario->apellido ?>">
</div>

<div class="form-group">
	<label for="correo">Correo</label>
	<input type="text" id="correo" class="form-control" name="correo" value="<?= $usuario->correo ?>">
</div>


<div class="form-group">
	<label for="fecha_Naci">Fecha de nacimiento</label>
	<input type="date" id="fecha_Naci" class="form-control" name="fecha_Naci" value="<?= $usuario->fecha_Naci ?>">
</div>

<div class="group pb-2">
<label for="grupo">Seleccione grupo</label>
    <select class="form-control" name="grupo">
        <option value="<?= $usuario->idGrupo?>" selected disabled> <?= $usuario->nombre_g?></option>
        <?php
		$rs = Listado::listadoGrupo();
		    foreach ($rs as $grupo){
                echo "
                <option value='{$grupo->idGrupo}'>{$grupo->nombre_g} | {$grupo->ubicacion_g}</option>
                ";
            }
        ?>
    </select>
</div>

<div class="form-group">
	<label for="password">Contraseña</label>
	<input type="password" id="password" class="form-control" name="password" value="<?= $usuario->password ?>">
</div>

<div class="custom-file">
	<input type="file" class="custom-file-input" id="userfile" name="userfile" lang="es" value="<?= $imageR ?>">
	<label class="custom-file-label" for="userfile">Buscar Foto</label>
</div>

<hr>

<div class="text-center">
	<button type="submit" class="btn btn-primary">Guardar</button>
</div>

</form>

