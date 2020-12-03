  <?php
    $text_position = block_field( 'text-position', false ); 
    $shortcode_string = '[wpforms id="'.block_field( 'form-id', false ).'" title="false" description="false"]';
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
            <?php  if ( ! empty(block_field( 'title', false )) ) : ?>
            <div class="box col-12">
              <h2><?php block_field( 'title' ); ?></h2>
            </div>
            <?php endif; ?>

            <?php  if ( ! empty(block_field( 'content', false )) ) : ?>
            <?php if($text_position === 'right') : ?>
            <div class="box col-6">
              <!-- Contacts -->
              <?php echo do_shortcode($shortcode_string) ?>
            </div>
            <?php endif ?>
            <div class="box col-6 ">
              <?php block_field( 'content' ); ?>
            </div>
            <?php if($text_position === 'left') : ?>
            <div class="box col-6">
              <!-- Contacts -->
              <?php echo do_shortcode($shortcode_string) ?>
            </div>
            <?php endif ?>
            <?php else : ?>
            <div class="box col-12">
              <!-- Contacts -->
              <?php echo do_shortcode($shortcode_string) ?>
            </div>
            <?php endif ?>




          </div>
        </div>
      </section>
  </div>