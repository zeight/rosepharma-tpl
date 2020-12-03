  <?php
    $image_position = block_field( 'image-position', false ); 
    // Title case
    if ( (block_field( 'title-style', false ) === 'lowercase')) 
      $title_class = "lowercase"; 
    else 
    $title_class = null;          
  ?>
  <div class="wrapper <?php block_field('className'); ?>">

    <?php  if ( ! empty(block_field( 'image-background', false )) ) : ?>
    <section class="container full section-single-image-back"
      style="background-image: url(<?php block_field( 'image-background' ); ?>)">
      <?php else : ?>
      <section class="container full section-single-image-back">
        <?php endif ?>

        <div class="container">
          <div class="columns-wrapper display-section <?php block_field( 'position-style' ); ?>">

            <?php if($image_position === 'left') : ?>
            <div class="box col-6 image-box image-back"
              style="background-image: url(<?php block_field( 'display-image' ); ?>)">
            </div>
            <?php endif ?>

            <div class="box col-6 ">
              <h2 class="<?php echo $title_class ?>"><?php block_field( 'title' ); ?></h2>
              <p><?php block_field( 'content' ); ?></p>

              <?php  if ( ! empty(block_field( 'link', false )) ) : ?>
              <a class="body-link"
                href="<?php block_field( 'link' ); ?>"><span><?php block_field( 'link-text' ); ?></span>
              </a>
              <?php endif ?>
            </div>

            <?php if($image_position === 'right') : ?>
            <div class="box col-6 image-box image-back"
              style="background-image: url(<?php block_field( 'display-image' ); ?>)">
            </div>
            <?php endif ?>

          </div>
        </div>
      </section>
  </div>