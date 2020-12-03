	<?php
    // Title case
    if ( (block_field( 'title-style', false ) === 'lowercase')) 
      $title_class = "lowercase"; 
    else 
    $title_class = null; 
	?>

	<div class="wrapper  <?php block_field('className'); ?>">
	  <section class="container full">
	    <div class="container">
	      <div class="columns-wrapper display-section <?php block_field( 'position-style' ); ?>">
	        <div class="box col-12 center">
	          <h2 class="<?php echo $title_class ?>"><?php block_field( 'title' ); ?></h2>
	          <?php block_field( 'content' ); ?>
	        </div>
	      </div>
	    </div>
	  </section>
	</div>