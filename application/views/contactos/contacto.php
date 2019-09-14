<!-- Default form contact -->

<title>BirkersRD - Contacto </title>
<div class="container py-5">

	<form class="text-center p-5" method="POST" action="<?php echo base_url('main/saveContacto') ?>">

		<h2 class="text-primary mb-4">Contactanos</h2>

		<!-- Name -->
		<input type="text" id="" name="nombre" class="form-control mb-4" placeholder="Telefono">

		<!-- Email -->
		<input type="email" id="correo" name="correo" class="form-control mb-4" placeholder="Correo">


		<!-- phone -->
		<input type="text" id="telefono" name="telefono" class="form-control mb-4" placeholder="Telefono">


		<!-- Message -->
		<div class="form-group">
			<textarea class="form-control rounded-0" id="comentario" name="comentario" rows="3" placeholder="Dejanos un mensaje"></textarea>
		</div>



		<!-- Send button -->
		<button class="btn btn-primary btn-block" type="submit">Enviar</button>

	</form>
	<!-- Default form contact -->
</div>
