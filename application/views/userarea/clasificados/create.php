<script type="text/javascript" src="<?php echo base_url('files/ckeditor/ckeditor.js'); ?>"></script>



<h2 class="text-center mb-4">Publicar articulo</h2>


<?php 
    $this->load->library('form_validation');

echo validation_errors(); ?>

<?php echo form_open_multipart('Main_usuario/saveClasificado')?>
	<div class="form-group">
		<label for="nombre_n">Titulo</label>
		<input type="text" id="nombre_c" name="nombre_c" class="form-control">
	</div>


	<div class="form-group">
		<label for="exampleFormControlTextarea2">Descripcion</label>
		<textarea class="form-control rounded-0" id="exampleFormControlTextarea2" name="descripcion_c" rows="3"></textarea>
	</div>

	<div class="form-group">
		<label for="body_c">Detalles del articulo</label>
		<textarea cols="80" id="body_c" name="body_c" rows="10"></textarea>
	</div>


	<div class="form-group">
		<label for="precio_c">Precio</label>
		<input type="number" id="precio_c" name="precio_c" class="form-control">
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
		<button type="submit" class="btn btn-success">Crear articulo</button>
	</div>



	<script>
		CKEDITOR.replace('body_c');
	</script>

</form>
