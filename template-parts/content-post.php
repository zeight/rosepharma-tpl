<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rosepharma
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("post-page wrapper full"); ?>>

		<header class="post-header wrapper" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)">
			<div class="container full">
				<div class="container">

					<div class="columns-wrapper">
						<div class="box col-10 nopadding">
							<div class="columns-wrapper justify-left">
								<div class="box col-6">
									<?php
										the_title( '<h1 class="entry-title">', '</h1>' ); 
									// the_archive_description( '<div class="archive-description">', '</div>' );
									?>				
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</header><!-- .entry-header -->	

		<div class="wrapper">
			<div class="container">
				<div class="columns-wrapper">
					<div class="box col-10">
						<div class="entry-content">
							<?php
							the_content();

							wp_link_pages(
								array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'rosepharma' ),
									'after'  => '</div>',
								)
							);
							?>
						</div><!-- .entry-content -->


					</div>
				</div>
			</div>
		</div>
	





	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'rosepharma' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
