<script type="text/javascript" src="<?php echo base_url('files/ckeditor/ckeditor.js'); ?>"></script>

<h2 class="text-center mb-4">Crear nuevo grupo</h2>

<?php 
    $this->load->library('form_validation');

echo validation_errors(); ?>

<?php echo form_open_multipart('Main_admin/saveGrupo')?>
	<div class="form-group">
		<label for="nombre_g">Nombre</label>
		<input type="text" id="nombre_g" name="nombre_g" class="form-control">
	</div>


    <div class="form-group">
		<label for="foto_g">Imagen</label>
		<input type="text" id="foto_g" name="foto_g" class="form-control" placeholder="Pegue el enlace de su imagen">
	</div>

    
    <div class="pt-2">
        <label for="ubicacion_g">Seleccione ubicacion</label>

        <select id="ubicacion_g" name="ubicacion_g" class="custom-select">
            <option value="" selected disabled></option>
            <option value="Azua">Azua</option>
            <option value="Bahoruco">Bahoruco</option>
            <option value="Barahona">Barahona</option>
            <option value="Dajabon">Dajabon</option>
            <option value="Duarte">Duarte</option>
            <option value="El seibo">El seibo</option>
            <option value="Elias piña">Elias piña</option>
            <option value="Espaillat">Espaillat</option>
            <option value="Hato Mayor">Hato Mayor</option>
            <option value="Hermanas Mirabal">Hermanas Mirabal</option>
            <option value="Independencia">Independencia</option>
            <option value="La altagracia">La altagracia</option>
            <option value="La romana">La romana</option>
            <option value="La vega">La vega</option>
            <option value="Maria trinidad sanchez">Maria trinidad sanchez</option>
            <option value="Monseñor nouel">Monseñor nouel</option>
            <option value="Monte cristi">Monte cristi</option>
            <option value="Monte plata">Monte plata</option>
            <option value="Pedernales">Pedernales</option>
            <option value="Peravia">Peravia</option>
            <option value="Puerto Plata">Puerto Plata</option>
            <option value="Samana">Samana</option>
            <option value="San cristobal">San cristobal</option>
            <option value="San jose de ocoa">San jose de ocoa</option>
            <option value="San juan">San juan</option>
            <option value="San pedro de macoris">San pedro de macoris</option>
            <option value="Sanchez ramirez">Sanchez ramirez</option>
            <option value="Santiago">Santiago</option>
            <option value="Santo Domingo">Santo Domingo</option>
            <option value="Valverde">Valverde</option>
           </select>
    </div>

	<div class="form-group mt-4">
		<label for="descripcion_g">Detalles del grupo</label>
		<textarea cols="80" id="descripcion_g" name="descripcion_g" rows="10"></textarea>
	</div>

	<div class="input-group">
 
		<div class="input-group-prepend">
			<span class="input-group-text" id="inputGroupFileAddon01">Subir</span>
		</div>
		<div class="custom-file">
			<input type="file" class="custom-file-input" id="inputGroupFile01" name="userfile" aria-describedby="inputGroupFileAddon01">
			<label class="custom-file-label" for="inputGroupFile01">Seleccione el logo del grupo</label>
		</div>
	</div>


	<div class="text-center mt-2">
		<button type="submit" class="btn btn-primary my-4 btn-block">Crear grupo</button>
	</div>



	<script>
		CKEDITOR.replace('descripcion_g');
	</script>

</form>
