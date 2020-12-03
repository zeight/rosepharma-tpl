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
        <div class="columns-wrapper column display-section <?php block_field( 'position-style' ); ?>">
          <div class="box col-5 center">
            <h2><?php block_field( 'row-1-title' ); ?></h2>
            <?php  if ( ! empty(block_field( 'row-1-link', false )) ) : ?>
            <a class="body-link"
              href="<?php block_field( 'row-1-link' ); ?>"><span><?php block_field( 'row-1-link-text' ); ?></span>
            </a>
            <?php endif ?>
          </div>
          <div class="box col-5 center">
            <h2><?php block_field( 'row-2-title' ); ?></h2>
            <h3><?php block_field( 'row-2-sub-title' ); ?></h3>
            <?php  if ( ! empty(block_field( 'row-2-link', false )) ) : ?>
            <a class="body-link"
              href="<?php block_field( 'row-2-link' ); ?>"><span><?php block_field( 'row-2-link-text' ); ?></span>
            </a>
            <?php endif ?>
          </div>
        </div>
      </div>
    </section>
  </div>