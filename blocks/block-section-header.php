<?php
	$styles = "";
		if (!empty(block_field( 'background-color', false ))) {
			$styles .= "background-color: ".block_field( 'background-color', false )."; ";
		}
		if (!empty(block_field( 'background-image', false ))) {
			$styles .= "background-image: url('". wp_get_attachment_url( block_field( 'background-image', false ) ) ."'); ";
		}		
	?>

<div class="wrapper <?php block_field('className'); ?>">
  <section class="container full section-header" style="<?php echo $styles ?>">
    <div class="container">
      <div class="columns-wrapper display-section <?php block_field( 'position-style' ); ?>">
        <div class="box col-6">
          <h2><?php block_field('header-title'); ?></h2>
        </div>
        <div class="box col-6 nopadding">
          <img src="<?php block_field('display-image'); ?>" alt="">
        </div>
      </div>
    </div>
  </section>
</div>