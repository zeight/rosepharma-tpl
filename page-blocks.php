<?php
/**
 * Template Name: Blocks page
 *
 * This is the template that displays blocks built pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rosepharma
 */

get_header();
?>

<main id="primary" class="wrapper fuill site-main">

  <?php
		while ( have_posts() ) :
			the_post();
			the_content();
			//get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
?>