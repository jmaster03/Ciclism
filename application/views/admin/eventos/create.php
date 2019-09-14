<h2 class="text-center mb-4">Crear nuevo evento</h2>


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />


<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js" integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==" crossorigin=""></script>



<style>
	#mapid {
		height: 180px;
	}
</style>



<?php
$this->load->library('form_validation');

echo validation_errors(); ?>

<?php echo form_open('Main_admin/saveEvento')?>

	<div class="form-group">
		<label for="title">Nombre</label>
		<input type="text" id="title" name="title" class="form-control" required>
	</div>



	<div class="form-row mb-4">
		<div class="col">
			<div class="form-group">
				<label for="start">Fecha inicio</label>
				<input type="date" id="start" name="start" class="form-control" required>
			</div>
		</div>
		<div class="col">
			<div class="form-group">
				<label for="end">Fecha fin</label>
				<input type="date" id="end" name="end" class="form-control" required>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label for="nombre">Descripcion</label>
		<textarea type="text" id="description" name="description" class="form-control" required></textarea>
	</div>


	<div class="form-row mb-4">
		<div class="col">
			<div>
				<label for="h_inicio">Hora de inicio</label>

				<select id="h_inicio" name="h_inicio" class="custom-select" required>
					<option value="" selected disabled></option>
					<option value="12:00 AM">12:00 AM</option>
					<option value="1:00 AM">1:00 AM</option>
					<option value="2:00 AM">2:00 AM</option>
					<option value="3:00 AM">3:00 AM</option>
					<option value="4:00 AM">4:00 AM</option>
					<option value="5:00 AM">5:00 AM</option>
					<option value="6:00 AM">6:00 AM</option>
					<option value="7:00 AM">7:00 AM</option>
					<option value="8:00 AM">8:00 AM</option>
					<option value="9:00 AM">9:00 AM</option>
					<option value="10:00 AM">10:00 AM</option>
					<option value="11:00 AM">11:00 AM</option>
					<option value="12:00 PM">12:00 PM</option>
					<option value="1:00 PM">1:00 PM</option>
					<option value="2:00 PM">2:00 PM</option>
					<option value="3:00 PM">3:00 PM</option>
					<option value="4:00 PM">4:00 PM</option>
					<option value="5:00 PM">5:00 PM</option>
					<option value="6:00 PM">6:00 PM</option>
					<option value="7:00 PM">7:00 PM</option>
					<option value="8:00 PM">8:00 PM</option>
					<option value="9:00 PM">9:00 PM</option>
					<option value="10:00 PM">10:00 PM</option>
					<option value="11:00 PM">11:00 PM</option>
				</select>
			</div>
		</div>
		<div class="col">
			<div>
				<label for="h_fin">Hora de cierre</label>

				<select id="h_fin" name="h_fin" class="custom-select" required>
					<option value="" selected disabled></option>
					<option value="12:00 AM">12:00 AM</option>
					<option value="1:00 AM">1:00 AM</option>
					<option value="2:00 AM">2:00 AM</option>
					<option value="3:00 AM">3:00 AM</option>
					<option value="4:00 AM">4:00 AM</option>
					<option value="5:00 AM">5:00 AM</option>
					<option value="6:00 AM">6:00 AM</option>
					<option value="7:00 AM">7:00 AM</option>
					<option value="8:00 AM">8:00 AM</option>
					<option value="9:00 AM">9:00 AM</option>
					<option value="10:00 AM">10:00 AM</option>
					<option value="11:00 AM">11:00 AM</option>
					<option value="12:00 PM">12:00 PM</option>
					<option value="1:00 PM">1:00 PM</option>
					<option value="2:00 PM">2:00 PM</option>
					<option value="3:00 PM">3:00 PM</option>
					<option value="4:00 PM">4:00 PM</option>
					<option value="5:00 PM">5:00 PM</option>
					<option value="6:00 PM">6:00 PM</option>
					<option value="7:00 PM">7:00 PM</option>
					<option value="8:00 PM">8:00 PM</option>
					<option value="9:00 PM">9:00 PM</option>
					<option value="10:00 PM">10:00 PM</option>
					<option value="11:00 PM">11:00 PM</option>
				</select>
			</div>
		</div>
	</div>


	<div class="group py-2">
		<label for="">Grupo organizador</label>
		<select class="form-control" name="organizador_e" required>
			<option selected disabled>nombre|provincia</option>

			<?php
			$rs = Listado::listadoGrupo();
			foreach ($rs as $grupo) {
				echo "
                <option value='{$grupo->idGrupo}'>{$grupo->nombre_g} | {$grupo->ubicacion_g}</option>
                ";
			}
			?>
		</select>
	</div>
	<input type="hidden" id="lat" name="lat" step=".000001" required>
	<input type="hidden" id="lng" name="lng" step=".000001" required>

	<div class="group py-2">
		<label>Ubicacion</label>
		<div id="mapid"></div>
	</div>


	<div class="text-center py-4">
		<button type="submit" class="btn btn-primary btn-block">Guardar</button>
	</div>

</form>




<script>

	var mymap = L.map('mapid').setView([18.483402, -69.929611], 13);

	L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
		attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
		id: 'mapbox.streets',
	}).addTo(mymap);

	var marker = L.marker([18.483402, -69.929611]).addTo(mymap);

	function onMapClick(e) {

		var lat = (e.latlng.lat).toFixed(6);
		var lng = (e.latlng.lng).toFixed(6);

		$('#lat').val(lat);
		$('#lng').val(lng);
	

	
		var newLatLng = new L.LatLng(lat, lng);
   		marker.setLatLng(newLatLng);

		alert('Coordenadas obtenidas!');
	}
	mymap.on('click', onMapClick);
</script>

