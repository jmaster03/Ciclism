<script type="text/javascript" src="<?php echo base_url('files/ckeditor/ckeditor.js'); ?>"></script>



<h2 class="text-center mb-4">Crear nueva galeria</h2>


<?php 
    $this->load->library('form_validation');

echo validation_errors(); ?>

<?php echo form_open('Main_admin/saveGaleria')?>
	<div class="form-group">
		<label for="nombre_ga">Titulo</label>
		<input type="text" id="nombre_ga" name="nombre_ga" class="form-control">
	</div>


	<div class="form-group">
		<label for="descripcion_ga">Detalles:</label>
		<textarea cols="80" id="descripcion_ga" name="descripcion_ga" rows="10"></textarea>
	</div>


	<div class="form-group">
		<label for="foto1_ga">Foto 1</label>
		<input type="text" id="foto1_ga" name="foto1_ga" class="form-control" placeholder="Pegue aqui el enlace de la primera imagen" required>
	</div>

	<div class="form-group">
		<label for="foto2_ga">Foto 2</label>
		<input type="text" id="foto2_ga" name="foto2_ga" class="form-control" placeholder="Pegue aqui el enlace de la segunda imagen" required>
	</div>
	<div class="form-group">
		<label for="foto3_ga">Foto 3</label>
		<input type="text" id="foto3_ga" name="foto3_ga" class="form-control" placeholder="Pegue aqui el enlace de la tercera imagen" required>
	</div>
	<div class="form-group">
		<label for="foto4_ga">Foto 4</label>
		<input type="text" id="foto4_ga" name="foto4_ga" class="form-control" placeholder="Pegue aqui el enlace de la cuarta imagen" required>
	</div>
	<div class="form-group">
		<label for="foto5_ga">Foto 5</label>
		<input type="text" id="foto5_ga" name="foto5_ga" class="form-control" placeholder="Pegue aqui el enlace de la quinta imagen" required>
	</div>
	<div class="form-group">
		<label for="foto6_ga">Foto 6</label>
		<input type="text" id="foto6_ga" name="foto6_ga" class="form-control" placeholder="Pegue aqui el enlace de la sexta imagen" required>
	</div>
	<div class="form-group">
		<label for="foto7_ga">Foto 7</label>
		<input type="text" id="foto7_ga" name="foto7_ga" class="form-control" placeholder="Pegue aqui el enlace de la septima imagen" required>
	</div>
	<div class="form-group">
		<label for="foto8_ga">Foto 8</label>
		<input type="text" id="foto8_ga" name="foto8_ga" class="form-control" placeholder="Pegue aqui el enlace de la octava imagen">
	</div>


	<div class="text-center mb-5">
		<button type="submit" class="btn btn-primary my-4 btn-block">Crear galeria</button>
	</div>





</form>
<script>
		CKEDITOR.replace('descripcion_ga');
	</script>
