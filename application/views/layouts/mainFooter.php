<!-- Footer -->
<footer class="page-footer font-small lighten-5 text-white">

	<div style="background-color: #111;">
		<div class="container">

			<!-- Grid row-->
			<div class="row py-4 d-flex align-items-center">

				<!-- Grid column -->
				<div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
					<h6 class="mb-0">Mantente conectado a traves de nuestras redes sociales!</h6>
				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-6 col-lg-7 text-center text-md-right">

					<!-- Facebook -->
					<a class="fb-ic">
						<i class="fab fa-facebook-f white-text mr-4"> </i>
					</a>
					<!-- Twitter -->
					<a class="tw-ic">
						<i class="fab fa-twitter white-text mr-4"> </i>
					</a>


					<!--Instagram-->
					<a class="ins-ic">
						<i class="fab fa-instagram white-text"> </i>
					</a>

				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row-->

		</div>
	</div>

	<!-- Footer Links -->
	<div class="container text-center text-md-left mt-5">

		<!-- Grid row -->
		<div class="row mt-3 dark-grey-text">


			<!-- Grid column -->
			<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-white">

				<!-- Links -->
				<h6 class="text-uppercase font-weight-bold">De interes</h6>
				<hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px;">
				<p>
					<a class="text-white" href="<?php echo base_url('main/noticias') ?>">Noticias</a>
				</p>
				<p>
					<a class="text-white" href="<?php echo base_url('main/grupos') ?>">Grupos</a>
				</p>
				<p>
					<a class="text-white" href="#!">Acerca de nosotros</a>
				</p>


			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 text-white">

				<!-- Links -->
				<h6 class="text-uppercase font-weight-bold">Enlaces de ayuda</h6>
				<hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 150px;">

				<p>
					<a class="text-white" href="<?php echo base_url('main/clasificados') ?>">Clasificados</a>
				</p>
				<p>
					<a class="text-white" href="<?= base_url('main/contactanos'); ?>">Contactanos</a>
				</p>

			</div>
			<!-- Grid column -->

			<!-- Grid column -->
			<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-white">

				<!-- Links -->
				<h6 class="text-uppercase font-weight-bold">Contacto</h6>
				<hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 80px;">
				<p>
					<i class="fas fa-home mr-3"></i> Santo Domingo, RD</p>
				<p>
					<i class="fas fa-envelope mr-3"></i> info@bikersrd.com</p>
				<p>
					<i class="fas fa-phone mr-3 "></i> +1 (809) 777-7777</p>
				<p>
					<i class="fas fa-print mr-3"></i> +1 (809) 222-7777</p>

			</div>
			<!-- Grid column -->

		</div>
		<!-- Grid row -->

	</div>
	<!-- Footer Links -->

	<!-- Copyright -->
	<div class="footer-copyright text-center text-primary-50 py-3">Powered by
		<a class="dark-grey-text" href="#"> CodingArt</a> © 2019 Copyright
	</div>
	<!-- Copyright -->

</footer>
<!-- Footer -->



<?php
	$idSlider = 43;
	$res = Listado::getSlider($idSlider);
	$slider = $res [0];
?>

<style>
	/*css*/

	/* Navigation*/
	.navbar {
		background-color: transparent;
	}

	.scrolling-navbar {
		transition: background .5s ease-in-out, padding .5s ease-in-out;
	}

	.top-nav-collapse {
		background-color: #667490;
	}

	footer.page-footer {
		background-color: #667490;
	}

	@media only screen and (max-width: 768px) {
		.navbar {
			background-color: #667490;
		}
	}

	/* Necessary for full page carousel*/
	html,
	body,
	.view {
		height: 100%;
	}

	body {
		background: #232526;
		/* fallback for old browsers */
		background: -webkit-linear-gradient(to right, #414345, #232526);
		/* Chrome 10-25, Safari 5.1-6 */
		background: linear-gradient(to right, #414345, #232526);
		/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


	}

	/* Carousel*/
	.carousel,
	.carousel-item,
	.carousel-item.active {
		height: 100%;
	}

	.carousel-inner {
		height: 100%;
	}

	.carousel-item:nth-child(1) {
		background-image: url(<?= $slider->slider_1 ?>);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center center;
	}

	.carousel-item:nth-child(2) {
		background-image: url(<?= $slider->slider_2 ?>); ?>);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center center;
	}

	.carousel-item:nth-child(3) {
		background-image: url(<?= $slider->slider_3 ?>); ?>);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center center;
	}
</style>
<script type='text/javascript' src="<?php echo base_url(); ?>files/js/custom/main.js"></script>




<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/js/mdb.min.js"></script>

</body>

</html>
