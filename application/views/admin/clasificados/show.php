<h2 class="text-center mb-4">Anuncio - <b><?= $clasificado->nombre_c ?> </b></h2>


<?php


if ($clasificado->foto_c === 'noimage.jpg') {
	$imageR = base_url('files/img/static/noimage.jpg');
} else {
	$imageR = (base_url() . 'files/img/clasificados/' . $clasificado->foto_c);
}

?>

<div class="text-center">
	<img src=<?= $imageR ?> alt="" width="300px">
</div>
<hr class="border-primary">
<h3 class="text-center">Detalles:</h3>
<h6><b>Vendedor:</b> <?= $clasificado->nombre ?></h6>
<h6><b>Fecha: </b> <?= $clasificado->fecha_agregado ?></h6>
<h6><b>Precio: </b>$RD <?= $clasificado->precio_c ?></h6>
<hr class="border-primary">

<h3 class="text-center">Descripcion:</h3>

<?= $clasificado->descripcion_c ?>
<hr class="border-primary">

<div class="text-center">

	<a href='<?= base_url('main_admin/clasificados') ?>' class='btn btn-primary px-2'><i class="fas fa-arrow-left"></i></a>
	<?php
		$urlDel = base_url("main_admin/delClasificado/{$clasificado->idClasificado}");

	echo "
		<a onclick=\"return confirm('¿Estas seguro de eliminar a {$clasificado->nombre_c}?')\" href='{$urlDel}' class='btn btn-danger px-2'><i class='fas fa-trash-alt'></i></a>
	";
	?>
</div>
