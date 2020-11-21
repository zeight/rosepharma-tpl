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

	<main id="primary" class="site-main">

	<div class="page-wrappwer">
		<div class="row">
			<div class="box col-12 justify-center">
				<h1>HERE WE GO!!!</h1>
			</div>
		</div>
	</div>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
