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

	<main id="primary" class="container">

		<div class="columns-wrapper display-section">
		<section class="box col-6">
		</section>
		<section class="box col-6 ">
			<h2>You.<br/> At your best.</h2>
			<p>Enter a world of beauty, care and premium products for your skin. Rose Pharma develops safe treatments for the daily routine, effective cosmetics and professional solutoins to be you - at your best.</p>
		</section>

		<section  class="box col-6 justify-center">
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
		</section>
	</div>

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
