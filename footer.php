<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package weyanone
 */

?>
<div id="toast-sucess" class="toast align-items-center fade position-fixed top-0 hide w-100 rounded-0 shadow-none"
	role="alert" aria-live="assertive" aria-atomic="true">
	<div class="d-flex alert alert-success mb-0  rounded-0 border-0">
		<div class="toast-body text-center w-100">
			Sus datos fueron enviados correctamente
		</div>
		<button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
	</div>
</div>
<footer id="site-footer">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-4 text-mobile">
				<img src="<?= site_url('/wp-content/uploads/2024/12/Logo-white.png') ?>" alt="Barrera y asociados"
					class="img-fluid">
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-4">
				<ul class="m-0 p-0">
					<li class="py-2">
						<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M22.0833 4.56958H2.58325C2.38434 4.56958 2.19357 4.6486 2.05292 4.78925C1.91227 4.9299 1.83325 5.12067 1.83325 5.31958V20.3196C1.83325 20.5185 1.91227 20.7093 2.05292 20.8499C2.19357 20.9906 2.38434 21.0696 2.58325 21.0696H22.0833C22.2822 21.0696 22.4729 20.9906 22.6136 20.8499C22.7542 20.7093 22.8333 20.5185 22.8333 20.3196V5.31958C22.8333 5.12067 22.7542 4.9299 22.6136 4.78925C22.4729 4.6486 22.2822 4.56958 22.0833 4.56958ZM12.7936 14.1616C12.6619 14.2639 12.5 14.3195 12.3333 14.3195C12.1665 14.3195 12.0046 14.2639 11.8729 14.1616L4.53091 8.4513L5.45153 7.26724L12.3333 12.6194L19.215 7.26724L20.1356 8.4513L12.7936 14.1616Z"
								fill="white" />
						</svg>
						<a href="tel:+529999412628" class="text-decoration-none text-white ms-2">+52 (999) 941 2628</a>
					</li>
					<li class="py-2">
						<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M22.7835 18.4196C22.5388 18.159 21.6749 17.3883 20.0868 16.3688C18.487 15.3404 17.3071 14.6991 16.9687 14.5496C16.9389 14.5364 16.906 14.5315 16.8736 14.5356C16.8412 14.5396 16.8106 14.5524 16.7849 14.5726C16.2398 14.9977 15.322 15.7787 15.2727 15.8208C14.9549 16.0932 14.9549 16.0932 14.6948 16.0083C14.2373 15.8583 12.816 15.1037 11.5776 13.8624C10.3392 12.6212 9.54556 11.1647 9.39556 10.7077C9.30978 10.4471 9.30978 10.4471 9.58306 10.1293C9.62525 10.0801 10.4067 9.16225 10.8318 8.61756C10.852 8.59191 10.8648 8.56125 10.8688 8.52887C10.8729 8.4965 10.868 8.46363 10.8548 8.43381C10.7052 8.0949 10.064 6.91553 9.03556 5.31568C8.01462 3.72803 7.24494 2.86412 6.98431 2.61943C6.96039 2.59686 6.93083 2.58116 6.89874 2.57399C6.86665 2.56681 6.83322 2.56842 6.80197 2.57865C5.89094 2.89172 5.01194 3.2912 4.17697 3.77162C3.37092 4.2402 2.6078 4.77901 1.8965 5.38178C1.87167 5.40289 1.85305 5.43036 1.84265 5.46124C1.83224 5.49213 1.83044 5.52526 1.83744 5.55709C1.9354 6.01365 2.40369 7.91959 3.85681 10.5596C5.33947 13.254 6.36697 14.6344 8.54431 16.8043C10.7217 18.9741 12.1457 20.0635 14.8429 21.5462C17.4829 22.9993 19.3898 23.468 19.8454 23.5651C19.8773 23.572 19.9105 23.5702 19.9414 23.5598C19.9724 23.5494 19.9999 23.5308 20.0212 23.506C20.6238 22.7947 21.1625 22.0316 21.6309 21.2255C22.1112 20.3905 22.5107 19.5115 22.8238 18.6005C22.8339 18.5695 22.8354 18.5364 22.8283 18.5046C22.8212 18.4728 22.8058 18.4434 22.7835 18.4196Z"
								fill="white" />
						</svg>
						<a href="mailto:ventas@barrerayasociados.com"
							class="text-decoration-none text-white ms-2">ventas@barrerayasociados.com</a>
					</li>
					<li class="py-2 d-flex">
						<svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M8.33325 0.56958C4.19278 0.56958 0.833252 3.59349 0.833252 7.31958C0.833252 13.3196 8.33325 21.5696 8.33325 21.5696C8.33325 21.5696 15.8333 13.3196 15.8333 7.31958C15.8333 3.59349 12.4737 0.56958 8.33325 0.56958ZM8.33325 11.0696C7.73991 11.0696 7.15989 10.8936 6.66654 10.564C6.17319 10.2343 5.78868 9.76581 5.56161 9.21763C5.33455 8.66945 5.27514 8.06625 5.3909 7.48431C5.50665 6.90237 5.79237 6.36782 6.21193 5.94826C6.63149 5.5287 7.16604 5.24298 7.74798 5.12722C8.32992 5.01147 8.93312 5.07088 9.4813 5.29794C10.0295 5.525 10.498 5.90952 10.8277 6.40287C11.1573 6.89622 11.3333 7.47624 11.3333 8.06958C11.3324 8.86496 11.016 9.62752 10.4536 10.1899C9.89119 10.7524 9.12863 11.0687 8.33325 11.0696Z"
								fill="white" />
						</svg>
						<span class="ms-2">
							<a href="" class="text-decoration-none text-white">Calle 7 No. 74 entre 4 y 6 Col.
								Felipe<br> Carrillo Puerto Norte</a><br>
							C.P. 97136. Mérida Yucatán México
						</span>

					</li>
				</ul>
			</div>
			<hr class="d-xl-none d-lg-none">
			<div class="col-6 col-sm-6 col-md-6 col-lg-4">
				<h6>Menu</h6>
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						// 'menu_id'        => 'primary-menu',
						'menu_class' => 'm-0 p-0',
						'container' => 'ul',
					)
				);
				?>
			</div>
			<div class="col-6 col-sm-6 col-md-6 col-lg-4">
				<h6>Síguenos</h6>
				<ul class="m-0 p-0">
					<li>
						<svg width="10" height="21" viewBox="0 0 10 21" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M2.54598 4.71681V7.46481H0.531982V10.8248H2.54598V20.8108H6.67998V10.8258H9.45498C9.45498 10.8258 9.71498 9.21481 9.84098 7.45281H6.69698V5.15481C6.69698 4.81181 7.14698 4.34981 7.59298 4.34981H9.84698V0.851807H6.78298C2.44298 0.851807 2.54598 4.21481 2.54598 4.71681Z"
								fill="white" />
						</svg>
					</li>
				</ul>
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-6">
				<p class="text-mobile">Barrera y Asociados @ 2024. Todos los derechos reservados.</p>
			</div>
			<div class="d-none d-lg-flex d-xl-flex col-lg-6 d-flex justify-content-end">
				<a href="" class="text-white text-decoration-none weight-400">Política de Privacidad</a>
				<a href="" class="text-white text-decoration-none ms-4 weight-400">Términos de Servicio</a>
			</div>
			<div class="d-lg-none d-xl-none text-center justify-content-center">
				<a href="" class="text-white text-decoration-none weight-400">Política de Privacidad</a>
				<a href="" class="text-white text-decoration-none ms-4 weight-400">Términos de Servicio</a>
			</div>
		</div>
	</div>
</footer>
</div>


<?php wp_footer(); ?>

</body>

</html>