  <?php
    // Background color
    if ( (! empty(block_field( 'background-style', false ))) && (block_field( 'background-style', false ) === 'alternate')) 
      $section_class = "alternate"; 
    else 
    $section_class = null; 
  ?>
  <div class="wrapper <?php block_field('className'); ?>">
    <section class="container full section-contact-us <?php echo $section_class ?>">
      <div class="container">
        <div class="columns-wrapper display-section <?php block_field( 'position-style' ); ?>">
          <div class="box col-4 center">
            <h2><?php block_field( 'title' ); ?></h2>
            <h3><?php block_field( 'sub-title' ); ?></h3>
            <a class="body-link"
              href="<?php block_field( 'link' ); ?>"><span><?php block_field( 'link-text' ); ?></span></a>
          </div>
        </div>
      </div>
    </section>
  </div>