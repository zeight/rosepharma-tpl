  <?php
    // Even or odd
    $image_position = block_field( 'image-position', false ); 
  ?>

  <div class="wrapper <?php block_field('className'); ?>">

    <!-- Background image-->
    <?php  if (!empty(block_field( 'image-background', false )) ) : ?>
    <section class="container full section-triple"
      style="background-image: url(<?php block_field( 'image-background' ); ?>)">
      <?php else : ?>
      <section class="container full section-triple">
        <?php endif; ?>



        <div class="container">
          <!-- Even or odd alternate -->
          <div class="columns-wrapper display-section <?php block_field( 'position-style' ); ?>">

            <div class="box col-4">
              <h3><?php block_field( 'title-left' ); ?></h3>
              <p><?php block_field( 'content-left' ); ?></p>

              <?php  if ( ! empty(block_field( 'link-left', false )) ) : ?>
              <a class="body-link"
                href="<?php block_field( 'link-left' ); ?>"><span><?php block_field( 'link-text-left' ); ?></span>
              </a>
              <?php endif ;?>
            </div>
            <div class="box col-4">
              <h3><?php block_field( 'title-center' ); ?></h3>
              <p><?php block_field( 'content-center' ); ?></p>

              <?php  if ( ! empty(block_field( 'link-center', false )) ) : ?>
              <a class="body-link"
                href="<?php block_field( 'link-center' ); ?>"><span><?php block_field( 'link-text-center' ); ?></span>
              </a>
              <?php endif ;?>
            </div>
            <div class="box col-4">
              <h3><?php block_field( 'title-right' ); ?></h3>
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