<?php

/**
 * Template Name: Home Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ABC_Insurance
 */

get_header();
?>



<!-- Banner Area Starting -->

<section id="banner" class="d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">

			</div>
			<div class="col-sm-6">
				<div class="banner-contents">
					<h1>Protect your family with insurance</h1>
					<a href="#">
						<button class="btn xb-btn-orange">Request Quote</button>
					</a>
				</div>
			</div>
		</div>

</section>

<!-- Banner Area Ending -->


<!-- Product Area Starting -->
<section id="product">
	<div class="container">
		<div class="product-sections">
			<h1 class="product-title">Products</h1>
			<div class="row">
				<div class="col-sm-3">
					<div class="house-insurance">
						<h4 class="prod-info-title">House Insurance</h4>
						<p class="prod-info">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias rem culpa harum, ducimus animi possimus.
						</p>
						<a href="#">Read More > </a>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="vehicle-insurance">
						<h4 class="prod-info-title">Vehicle Insurance</h4>
						<p class="prod-info">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias rem culpa harum, ducimus animi possimus.
						</p>
						<a href="#">Read More > </a>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="travel-insurance">
						<h4 class="prod-info-title">Travel Insurance</h4>
						<p class="prod-info">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias rem culpa harum, ducimus animi possimus.
						</p>
						<a href="#">Read More > </a>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="health-insurance">
						<h4 class="prod-info-title">Health Insurance</h4>
						<p class="prod-info">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias rem culpa harum, ducimus animi possimus.
						</p>
						<a href="#">Read More > </a>
					</div>
				</div>


			</div>

		</div>
	</div>
</section>
<!-- Product Area Ending -->



<!-- Call to action Area Starting -->
<section id="cta">
	<div class="container">
		<div class="cta-section">
			<div class="row">
				<div class="col-sm-7">
					<div class="cta-contents">
						<h1 class="cta-title">Looking for a Corporate Plan?</h1>
						<p class="cta-info">
							Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci itaque dolorum incidunt illum quo, cumque corporis magnam reprehenderit tempora fuga laudantium. Dicta dolorum aperiam magnam tenetur, dignissimos soluta porro quia.
						</p>
						<a href="#">
							<button class="btn xb-btn-orange">Learn More</button>
						</a>
					</div>
				</div>
				<div class="col-sm-5">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/image/corporate.png" alt="">
				</div>
			</div>
		</div>

	</div>
	</div>
</section>
<!-- Call to action Area Ending -->



<!-- client Area Starting -->
<section id="client">
	<div class="container">
		<div class="client-section">
			<h1 class="client-title">Our Clients</h1>
			<div class="row">
				<div class="col-sm-4">
					<div class="client-logo">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/image/clients/client_1.png" alt="">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="client-logo">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/image/clients/client_2.png" alt="">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="client-logo">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/image/clients/client_3.png" alt="">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="client-logo">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/image/clients/client_4.png" alt="">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="client-logo">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/image/clients/client_5.png" alt="">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="client-logo">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/image/clients/client_6.png" alt="">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="client-logo">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/image/clients/client_7.png" alt="">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="client-logo">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/image/clients/client_8.png" alt="">
					</div>
				</div>
				<div class="col-sm-4">
					<div class="client-logo">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/assets/image/clients/client_9.png" alt="">
					</div>
				</div>
			</div>
		</div>

	</div>
	</div>
</section>
<!-- client Area Ending -->



<?php
get_footer();
