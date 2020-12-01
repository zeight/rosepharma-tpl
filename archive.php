<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rosepharma
 */

get_header();
?>

	<main id="primary" class="archive-page wrapper full">

		<header class="page-header wrapper">
			<div class="container full">
				<div class="container">
					<div class="box col-12">
						<?php
						the_archive_title( '<h1 class="archive-title">', '</h1>' );
						// the_archive_description( '<div class="archive-description">', '</div>' );
						?>				
				</div>
				</div>
			</div>
		</header><!-- .page-header -->	
		
		<div class="wrapper">
			<div class="container">
				<div class="columns-wrapper justify-left">

						<?php if ( have_posts() ) : ?>

									<?php
									/* Start the Loop */
									while ( have_posts() ) :
										the_post();

										/*
										* Include the Post-Type-specific template for the content.
										* If you want to override this in a child theme, then include a file
										* called content-___.php (where ___ is the Post Type name) and that will be used instead.
										*/
										get_template_part( 'template-parts/content', 'grid-item' );

									endwhile;

									the_posts_navigation();

								else :

									get_template_part( 'template-parts/content', 'none' );

								endif;
								?>

				</div>
			</div>
		</div>


	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
