<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rosepharma
 */

?>
<!-- <div class="wrapper">
  <div class="container full">
    <div class="site-social columns-wrapper justify-center center">
      <div class="box col-12">
        <h2>Social Icons</h2>
      </div>
    </div>
  </div>
</div> -->
<div class="wrapper footer">
  <div class="container">
    <footer id="colophon" class="site-footer columns-wrapper">
      <div class="box col-4">
        <div class="site-info">
          <p><?php $rosepharma_description = get_bloginfo( 'description', 'display' ); 
				if ( $rosepharma_description || is_customize_preview() ) :
					?>
          <p class="site-description">
            <?php echo $rosepharma_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
          <?php endif; ?></p>
          <p>ROSE PHARMA SA</p>
          <p>via San Gottardo, 10 <br />6900 LUGANO - CH</p>
          <p>Tel. +4191 921 09 03</p>
          <p>Fax +4191 912 26 6</p>
        </div><!-- .site-info -->
      </div>
      <div class="box col-4 footer-logo-container">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/rosepharma_logo.svg" alt="">
      </div>
      <div class="box col-4">
        <div class="site-info">
          <?php
						/* translators: %s: CMS name, i.e. WordPress. */
						//printf( esc_html__( 'Proudly powered by %s', 'rosepharma' ), 'WordPress' );
							/* translators: 1: Theme name, 2: Theme author. */
						//printf( esc_html__( 'Theme: %1$s by %2$s.', 'rosepharma' ), 'rosepharma', '<a href="http://underscores.me/">Me</a>' );
            ?>

          <?php
						wp_nav_menu(
						array(
						'theme_location' => 'menu-2',
						'menu_id'        => 'footer-menu',
						)
						);
            ?>

        </div><!-- .site-info -->
      </div>
    </footer><!-- #colophon -->
  </div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>