<script type="text/javascript" src="<?php echo base_url('files/ckeditor/ckeditor.js'); ?>"></script>



<h2 class="text-center mb-4">Editar articulo</h2>

<?php
	$this->load->library('form_validation');

	echo validation_errors(); ?>

	<?php echo form_open_multipart('main_admin/updateNoticia') ?>
	<input type="hidden" name="idNoticia" value="<?= $noticia->idNoticia ?>" readonly>
	
	<h3 class="text-center mt-4">Imagen del articulo</h3>
	<?php $imgArticulo = (base_url() . 'files/img/noticias/' . $noticia->foto_n); ?>

	<div class="text-center">
		<img src='<?= $imgArticulo ?>' alt='thumb' class=' w-20 img-thumbnail'>
	</div>

	<div class="form-group">
		<label for="nombre_n">Titulo</label>
		<input type="text" id="nombre_n" name="nombre_n" class="form-control" value="<?= $noticia->nombre_n ?>">
	</div>

	<div class="form-group">
		<label for="exampleFormControlTextarea2">Descripcion</label>
		<textarea class="form-control rounded-0" id="exampleFormControlTextarea2" name="descripcion_n" rows="3"><?= $noticia->descripcion_n ?></textarea>
	</div>

	<div class="form-group">
		<label for="body_n">Cuerpo del articulo</label>
		<textarea cols="80" id="body_n" name="body_n" rows="10"><?= $noticia->body_n ?></textarea>
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

	
 

	<div class="text-center py-4">
		<button type="submit" class="btn btn-primary btn-block">Editar articulo</button>
	</div>



	<script>
		CKEDITOR.replace('body_n');
	</script>

</form>
