<script type="text/javascript" src="<?php echo base_url('files/ckeditor/ckeditor.js'); ?>"></script>



<h2 class="text-center mb-4">Editar galeria <b><?= $galeria->nombre_ga?> </b></h2>


<?php 
    $this->load->library('form_validation');

echo validation_errors(); 

	$img_1 = $galeria->foto1_ga;
	$img_2 = $galeria->foto2_ga;
	$img_3 = $galeria->foto3_ga;
	$img_4 = $galeria->foto4_ga;
	$img_5 = $galeria->foto5_ga;
	$img_6 = $galeria->foto6_ga;
	$img_7 = $galeria->foto7_ga;
	$img_8 = $galeria->foto8_ga;

?>

<?php echo form_open('Main_admin/updateGaleria')?>
	<input type="hidden" name="idGaleria" value="<?= $galeria->idGaleria ?>">
	<div class="form-group">
		<label for="nombre_ga">Titulo</label>
		<input type="text" id="nombre_ga" name="nombre_ga" class="form-control" value="<?= $galeria->nombre_ga ?>">
	</div>


	<div class="form-group">
		<label for="descripcion_ga">Detalles:</label>
		<textarea cols="80" id="descripcion_ga" name="descripcion_ga" rows="10"><?= $galeria->descripcion_ga ?></textarea>
	</div>

<div class="row text-center py-2">
	<div class="col">
		<label for="foto1_ga">Foto 1</label>
		<br>
		<img src="<?= $img_1 ?>" style="width:200px; height:200px">
		<br>
		<input type="text" id="foto1_ga" name="foto1_ga" class="form-control" value="<?= $img_1 ?>" placeholder="Pegue aqui el enlace de la primera imagen" required>
	</div>

	<div class="col">
		<label for="foto2_ga">Foto 2</label>
		<br>
		<img src="<?= $img_2 ?>" style="width:200px; height:200px">
		<br>
		<input type="text" id="foto2_ga" name="foto2_ga" class="form-control" value="<?= $img_2 ?>" placeholder="Pegue aqui el enlace de la segunda imagen" required>
	</div>

	<div class="col">
		<label for="foto3_ga">Foto 3</label>
		<br>
		<img src="<?= $img_3 ?>" style="width:200px; height:200px">
		<br>
		<input type="text" id="foto3_ga" name="foto3_ga" class="form-control" value="<?= $img_3 ?>" placeholder="Pegue aqui el enlace de la tercera imagen" required>
	</div>

	<div class="col">
		<label for="foto4_ga">Foto 4</label>
		<br>
		<img src="<?= $img_4 ?>" style="width:200px; height:200px">
		<br>
		<input type="text" id="foto4_ga" name="foto4_ga" class="form-control" value="<?= $img_4 ?>" placeholder="Pegue aqui el enlace de la cuarta imagen" required>
	</div>
</div>
<div class="row text-center py-2">
	<div class="col">
		<label for="foto5_ga">Foto 5</label>
		<br>
		<img src="<?= $img_5 ?>" style="width:200px; height:200px">
		<br>
		<input type="text" id="foto5_ga" name="foto5_ga" class="form-control" value="<?= $img_5 ?>" placeholder="Pegue aqui el enlace de la quinta imagen" required>
	</div>

	<div class="col">
		<label for="foto6_ga">Foto 6</label>
		<br>
		<img src="<?= $img_6 ?>" style="width:200px; height:200px">
		<br>
		<input type="text" id="foto6_ga" name="foto6_ga" class="form-control" value="<?= $img_6 ?>" placeholder="Pegue aqui el enlace de la sexta imagen" required>
	</div>

	<div class="col">
		<label for="foto7_ga">Foto 7</label>
		<br>
		<img src="<?= $img_7 ?>" style="width:200px; height:200px">
		<br>
		<input type="text" id="foto7_ga" name="foto7_ga" class="form-control" value="<?= $img_7 ?>" placeholder="Pegue aqui el enlace de la septima imagen" required>
	</div>

	<div class=" col">
		<label for="foto8_ga">Foto 8</label>
		<br>
		<img src="<?= $img_8 ?>" style="width:200px; height:200px">
		<br>
		<input type="text" id="foto8_ga" name="foto8_ga" class="form-control" value="<?= $img_8 ?>" placeholder="Pegue aqui el enlace de la octava imagen">
	</div>

</div>

	<div class="text-center py-4">
		<button type="submit" class="btn btn-primary btn-block">Editar galeria</button>
	</div>



</form>


<script>
	CKEDITOR.replace('descripcion_ga');
</script>
