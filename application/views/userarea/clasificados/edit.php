<script type="text/javascript" src="<?php echo base_url('files/ckeditor/ckeditor.js'); ?>"></script>


<h2 class="text-center mb-4">Editar articulo</h2>

<?php
	$this->load->library('form_validation');

	echo validation_errors(); ?>

	<?php echo form_open_multipart('Main_usuario/updateClasificado') ?>
	<input type="hidden" name="idClasificado" value="<?= $clasificado->idClasificado ?>" readonly>
	<div class="form-group">
		<label for="nombre_c">Titulo</label>
		<input type="text" id="nombre_c" name="nombre_c" class="form-control" value="<?= $clasificado->nombre_c ?>">
	</div>

    <label class="mt-4">Imagen del articulo</label>
	<?php $imgArticulo = (base_url() . 'files/img/clasificados/' . $clasificado->foto_c); ?>

	<div class="text-center">
		<img src='<?= $imgArticulo ?>' alt='thumb' class=' w-20 img-thumbnail'>
	</div>

	<div class="form-group">
		<label for="exampleFormControlTextarea2">Descripcion</label>
		<textarea class="form-control rounded-0" id="exampleFormControlTextarea2" name="descripcion_c" rows="3"><?= $clasificado->descripcion_c ?></textarea>
	</div>

	<div class="form-group">
		<label for="body_n">Cuerpo del articulo</label>
		<textarea cols="80" id="body_c" name="body_c" rows="10"><?= $clasificado->body_c ?></textarea>
	</div>

    <div class="form-group">
		<label for="precio_c">Precio</label>
		<input type="number" id="precio_c" name="precio_c" class="form-control" value="<?= $clasificado->precio_c ?>">
	</div>


	<div class="input-group">
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
		</div>
		<div class="custom-file">
			<input type="file" class="custom-file-input" id="inputGroupFile01" name="userfile" aria-describedby="inputGroupFileAddon01">
			<label class="custom-file-label" for="inputGroupFile01">Seleccione foto para el articulo</label>
		</div>
	</div>


 

	<div class="text-center">
		<button type="submit" class="btn btn-success">Editar articulo</button>
	</div>



	<script>
		CKEDITOR.replace('body_c');
	</script>

</form>
