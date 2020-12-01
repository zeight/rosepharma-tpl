<?php
/**
 * Template Name: Home template
 *
 * This is the template that displays the homepage
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rosepharma
 */

get_header();
?>

	<main id="primary" class="wrapper full home-page">

		<div class="wrapper">
			<section class="container full section-0">
				<div class="columns-wrapper display-section even">
						<div class="box col-12 nopadding">
							 <!-- <video playsInline controls id="mainVid" className="video-player">
									<source src="<?php bloginfo('template_url'); ?>/assets/img/home-video.mp4" type="video/mp4" />
									Sorry, your browser doesn't support embedded videos.
								</video>  -->

								<video id="player" playsinline controls>
									<source src="<?php bloginfo('template_url'); ?>/assets/img/home-video.mp4" type="video/mp4" />
								</video>

								<!-- <div class="video-logo">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/zohabex_logo.svg" alt="">			
								</div>  -->
						</div>
					</div>
		</section>
	</div>


	<div class="wrapper">
			<section class="container full section-1">
				<div class="container">
					<div class="columns-wrapper display-section odd">
						<div class="box col-5">
						</div>
						<div class="box col-2">
<img src="<?php bloginfo('template_url'); ?>/assets/img/zohabex_logo-nos.png" alt="">							
						</div>
						<div class="box col-5">
							<h2>You.<br/> At your best.</h2>
							<p>Premium product, global care: our claim describes the key points of <b>Rose Pharma - Zhoabex</b> hyaluronic acid dermal fi llers and complementary treatments.Find our <b>professional information</b> in the dedicated area.</p>
						</div>
					</div>
				</div>
		</section>
	</div>

	<div class="wrapper">
		<section class="container full section-2">
			<div class="container">
				<div class="columns-wrapper display-section even">
					<div class="box col-5 ">
						<h2>Professionals</h2>
						<p>Enter a world of beauty, care and premium products for your skin. Rose Pharma develops safe treatments for the daily routine, effective cosmetics and professional solutoins to be you - at your best.</p>
					</div>
					<div class="box col-2">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/rosepharma_logo-nos.png" alt="">
					</div>
					<div class="box col-5 ">
						<h2>Distributors</h2>
						<p>In the dedicated area you have access to useful information about our company and specific tools to become one of <b>Rose Pharma distributors.</b></p>
					</div>
				</div>
			</div>
		</section>
	</div>	

	<div class="wrapper">
			<section class="container full bubble-background">
				<div class="container">
					<div class="columns-wrapper display-section odd">
						<div class="box col-6">
						</div>
						<div class="box col-6 ">
							<h2>HYALURONIC ACID</h2>
							<p>Hyaluronic acid, abbreviated to HA, is a natural element of your skin.As a result of skin ageing, this precious natural fi ller decreases and we can notice a loss of volume, compactness and smoothness.There are many solutions tailored by Rose Pharma to the needs of every skin type, age range and desired result, from facial cream with hyaluronic acid to injectable hyaluronic acid fillers.</p>
						</div>
					</div>
				</div>
		</section>
	</div>	

	<div class="wrapper">
		<section class="container full section-single-image">
			<div class="container">
				<div class="columns-wrapper display-section even">
						<div class="box col-6 image-box">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/section-4.jpg" alt="">
						</div>
						<div class="box col-6">
							<h2>Did you know?</h2>
							<p>What happens to your skin as you age?How can you prevent signs of ageing?And which are the best, safest and most eff ective anti-ageing treatments?<b>Rose Pharma will ask to your questions.</b></p>
						</div>
				</div>
			</div>
		</section>
	</div>	

	<div class="wrapper">
		<section class="container full section-5">
			<div class="container">
				<div class="columns-wrapper display-section odd center">
						<div class="box col-12">
							<h2>Contact us</h2>
							<h3>For more information</h3>
							<p>Contact us</p>
						</div>
						<div class="col-12">
							<img src="<?php bloginfo('template_url'); ?>/assets/img/section-5.jpg" alt="">
						</div>
				</div>
			</div>
		</section>
	</div>			

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
