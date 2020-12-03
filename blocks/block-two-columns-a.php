  <?php
    // Even or odd
    $image_position = block_field( 'image-position', false ); 
    // Title color
    if ( (! empty(block_field( 'title-color', false ))) && (block_field( 'title-color', false ) === 'alternate')) 
      $section_class = "section-two-columns-a"; 
    else 
    $section_class = null; 
  
  ?>
  <div class="wrapper <?php block_field('className'); ?>">

    <!-- Background image-->
    <?php  if (!empty(block_field( 'image-background', false )) ) : ?>
    <section class="container full <?php echo $section_class ?>"
      style="background-image: url(<?php block_field( 'image-background' ); ?>)">
      <?php else : ?>
      <section class="container full <?php echo $section_class ?>">
        <?php endif; ?>



        <div class="container">
          <!-- Even or odd alternate -->
          <div class="columns-wrapper display-section <?php block_field( 'position-style' ); ?>">

            <div class="box col-5 ">
              <h2><?php block_field( 'title-left' ); ?></h2>
              <p><?php block_field( 'content-left' ); ?></p>

              <?php  if ( ! empty(block_field( 'link-left', false )) ) : ?>
              <a class="body-link"
                href="<?php block_field( 'link-left' ); ?>"><span><?php block_field( 'link-text-left' ); ?></span>
              </a>
              <?php endif ;?>
            </div>
            <div class="box col-2 mobile-hide">
              <img src="<?php block_field( 'display-image' ); ?>" alt="">
            </div>
            <div class="box col-5 ">
              <h2><?php block_field( 'title-right' ); ?></h2>
              <p><?php block_field( 'content-right' ); ?></p>

              <?php  if ( ! empty(block_field( 'link-right', false )) ) : ?>
              <a class="body-link"
                href="<?php block_field( 'link-right' ); ?>"><span><?php block_field( 'link-text-right' ); ?></span>
              </a>
              <?php endif; ?>
            </div>

          </div>
        </div>
      </section>
  </div>