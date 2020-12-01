<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rosepharma
 */

get_header();
?>

	<main id="primary" class="wrapper full">


		<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );
		?>

		<div class="wrapper">
			<div class="container">
				<div class="columns-wrapper">
					<div class="box col-10">

						<?php
							the_post_navigation(
								array(
									'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'rosepharma' ) . '</span> <span class="nav-title">%title</span>',
									'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'rosepharma' ) . '</span> <span class="nav-title">%title</span>',
								)
							);
						?>
					</div>
				</div>
			</div>
		</div>



				<?php

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
