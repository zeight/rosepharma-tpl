<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rosepharma
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site page-wrapper">
	<div class="container full">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'rosepharma' ); ?></a>

		<header id="masthead" class="site-header wrapper">
			<div class="container">
				<div class="columns-wrapper">
					<div class="box col-12  header-logo-container">
						<img src="<?php bloginfo('template_url'); ?>/assets/img/rosepharma_logo.svg" alt="">
					</div>
					<div class="box col-12">

					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'rosepharma' ); ?></button>
						<?php
						wp_nav_menu(
						array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						)
						);
						?>
					</nav><!-- #site-navigation -->

					</div>
				</div>
			</div>
			<!-- <div class="site-branding"> -->
				<?php
				//the_custom_logo();
				//if ( is_front_page() && is_home() ) :
					?>
					<!-- <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1> -->
					<?php
				//else :
					?>
					<!-- <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> -->
					<?php
				//endif;
				?>
			<!-- </div> -->
			<!-- .site-branding -->


		</header><!-- #masthead -->

	</div>
