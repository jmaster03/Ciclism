
 <!--Slider section -->
 <div class="container border bordered z-depth-4 rounded mb-0">
 	<h2 class="text-center">Slider Inicial</h2>
 	<?php echo form_open('Main_admin/updateSlider') ?>
 	<input type="hidden" name="idSlider" value="<?= $slider->idSlider ?>" readonly>

 	<div class="row text-center py-2">

 		<div class="form-group col-4">
 			<label for="foto1">Imagen 1</label>
 			<img src="<?= $slider->slider_1 ?>" class="img-thumbnail rounded mx-auto d-block">
 			<input type="text" class="form-control mb-2" name="slider_1" value="<?= $slider->slider_1 ?>" placeholder="Enlace del primer slider">
 			<input type="text" class="form-control" name="text_1" value="<?= $slider->text_1 ?>">
 		</div>


 		<div class="form-group col-4">
 			<label for="foto2">Imagen 2</label>
 			<img src="<?= $slider->slider_2 ?>" class="img-thumbnail rounded mx-auto d-block">
 			<input type="text" class="form-control mb-2" name="slider_2" value="<?= $slider->slider_2 ?>" placeholder="Enlace del segundo slider">
 			<input type="text" class="form-control" name="text_2" value="<?= $slider->text_2 ?>">
 		</div>

 		<div class="form-group col-4">
 			<label for="foto3">Imagen 3</label>

 			<img src="<?= $slider->slider_3 ?>" class="img-thumbnail rounded mx-auto d-block">


 			<input type="text" class="form-control mb-2" name="slider_3" value="<?= $slider->slider_3 ?>" placeholder="Enlace del tercer slider">
 			<input type="text" class="form-control" name="text_3" value="<?= $slider->text_3 ?>">
 		</div>
 	</div>



 	<div class="text-center py-3">
 		<button type="submit" class="btn btn-primary btn-block">Actualizar</button>
 	</div>
 	</form>

 </div>
