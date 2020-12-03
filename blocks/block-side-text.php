  <?php
    $text_position = block_field( 'text-position', false ); 
  ?>

  <div class="wrapper <?php block_field('className'); ?>">

    <?php  if ( ! empty(block_field( 'image-background', false )) ) : ?>
    <section class="container full cover-background-left"
      style="background-image: url(<?php block_field( 'image-background' ); ?>)">
      <?php else : ?>
      <section class="container full">
        <?php endif ?>

        <div class="container">
          <div class="columns-wrapper display-section <?php block_field( 'position-style' ); ?>">

            <?php if($text_position === 'right') : ?>
            <div class="box col-6">
            </div>
            <?php endif ?>
            <div class="box col-6 ">
              <h2><?php block_field( 'title' ); ?></h2>
              <p><?php block_field( 'content' ); ?></p>
              <?php  if ( ! empty(block_field( 'link-right', false )) ) : ?>
              <a class="body-link"
                href="<?php block_field( 'link-right' ); ?>"><span><?php block_field( 'link-text-right' ); ?></span>
              </a>
              <?php endif; ?>
            </div>
            <?php if($text_position === 'left') : ?>
            <div class="box col-6">
            </div>
            <?php endif ?>
          </div>
        </div>
      </section>
  </div>