<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"
		integrity="sha512-KFHXdr2oObHKI9w4Hv1XPKc898mE4kgYx58oqsc/JqqdLMDI4YjOLzom+EMlW8HFUd0QfjfAvxSL6sEq/a42fQ=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
		crossorigin="anonymous"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
		rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page">
		<header id="masthead" class="site-header position-sticky top-0 bg-white">
			<div class="container">
				<div class="row">
					<nav id="site-navigation" class="nav justify-content-between align-items-center">
						<button class="btn d-block d-lg-none" type="button" data-bs-toggle="offcanvas"
							data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" class="bi"
								fill="currentColor" viewBox="0 0 16 16">
								<path fill-rule="evenodd"
									d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
								</path>
							</svg>
						</button>
						<div class="site-branding align-self-start">
							<?php
							the_custom_logo();
							?>
						</div><!-- .site-branding -->
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id' => 'primary-menu',
								'menu_class' => 'nav d-none d-xl-flex',
								'container' => 'ul',
							)
						);
						?>
						<div>
							<a class="btn btn-outline-primary rounded-0 outline-primary me-4 d-none d-lg-inline-block d-xl-inline-block"
								href="<?= site_url('/contacto') ?>">Contáctanos</a>
							<a href="tel:+529999412628"
								class="text-black text-decoration-none weight-500 me-4 d-none d-lg-inline-block d-xl-inline-block">+52
								(999) 941 2628</a>
							<a href="">
								<svg width="27" height="27" viewBox="0 0 27 27" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M22.67 4.30327C21.4704 3.10308 20.0452 2.15202 18.4766 1.50483C16.9079 0.857651 15.2268 0.527125 13.5299 0.532286C6.40845 0.532286 0.611218 6.30055 0.608321 13.3918C0.605171 15.6499 1.20038 17.8684 2.33336 19.8216L0.5 26.4831L7.34974 24.6949C9.24578 25.7221 11.3683 26.2597 13.5246 26.2589H13.5299C20.6507 26.2589 26.4473 20.4901 26.4508 13.3994C26.4551 11.7083 26.1231 10.0332 25.474 8.47158C24.8249 6.90998 23.8718 5.49306 22.67 4.30327ZM13.5299 24.0885H13.5252C11.6029 24.089 9.7155 23.5746 8.05934 22.5986L7.66718 22.3669L3.60251 23.4281L4.68747 19.4839L4.43201 19.0784C3.35713 17.3767 2.78764 15.4046 2.78981 13.3918C2.78981 7.49904 7.60983 2.70451 13.5339 2.70451C16.3758 2.69943 19.1032 3.82337 21.1165 5.8291C23.1297 7.83484 24.2638 10.5581 24.2693 13.4C24.267 19.2933 19.4493 24.0885 13.5299 24.0885ZM19.4203 16.0837C19.0977 15.9226 17.5088 15.1453 17.2145 15.0381C16.9203 14.9309 16.703 14.8771 16.4881 15.1991C16.2732 15.5212 15.654 16.2418 15.4657 16.459C15.2775 16.6762 15.0892 16.7 14.7666 16.539C14.4439 16.3779 13.403 16.0391 12.1698 14.9443C11.2099 14.0922 10.5623 13.0402 10.3741 12.7187C10.1858 12.3973 10.3538 12.2229 10.5154 12.063C10.6608 11.9188 10.838 11.6877 10.9997 11.5C11.1613 11.3123 11.2151 11.1779 11.3223 10.9636C11.4295 10.7493 11.3762 10.5616 11.2957 10.4011C11.2151 10.2407 10.5693 8.65872 10.3005 8.01516C10.0381 7.3884 9.7722 7.47355 9.5741 7.4637C9.38584 7.45444 9.16862 7.45212 8.95487 7.45212C8.79147 7.45637 8.6307 7.49427 8.48259 7.56343C8.33449 7.6326 8.20224 7.73156 8.09409 7.85413C7.79809 8.17619 6.96396 8.95472 6.96396 10.5349C6.96396 12.1152 8.12247 13.6444 8.28235 13.8587C8.44223 14.0731 10.5588 17.3186 13.7975 18.7106C14.3989 18.9681 15.0133 19.194 15.6384 19.3872C16.4117 19.6316 17.1155 19.5975 17.6716 19.5146C18.292 19.4225 19.5831 18.7373 19.8513 17.9865C20.1195 17.2358 20.1201 16.5928 20.0396 16.459C19.9591 16.3252 19.7436 16.2441 19.4203 16.0837Z"
										fill="#718E27" />
								</svg>
							</a>
						</div>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</header><!-- #masthead -->


		<div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop"
			aria-labelledby="staticBackdropLabel">
			<div class="offcanvas-header">
				<?php the_custom_logo(); ?>
				<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
			</div>
			<div class="offcanvas-body">
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
				<!-- <hr> -->
				<div class="d-flex justify-content-between align-items-center mt-4">
					<a class="btn btn-outline-primary rounded-0 outline-primary"
						href="<?= site_url('/contacto') ?>">Contáctanos</a>
					<a href="tel:+529999412628" class="text-black text-decoration-none weight-500">+52 (999) 941
						2628</a>
				</div>
			</div>
		</div>