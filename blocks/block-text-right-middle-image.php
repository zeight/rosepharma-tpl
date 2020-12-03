  <div class="wrapper <?php block_field('className'); ?>">
    <section class="container full greek-background"
      style="background-image: url(<?php block_field( 'background' ); ?>)">
      <div class="container">
        <div class="columns-wrapper display-section <?php block_field( 'position-style' ); ?> mobile-reverse">
          <div class="box col-5 mobile-hide">
          </div>
          <div class="box col-2">
            <img src="<?php block_field( 'middle-image' ); ?>" alt="">
          </div>
          <div class="box col-5">
            <h2><?php block_field( 'title' ); ?></h2>
            <p><?php block_field( 'content' ); ?></p>
            <a class="body-link"
              href="<?php block_field( 'link' ); ?>"><span><?php block_field( 'link-text' ); ?></span></a>
          </div>
        </div>
      </div>
    </section>
  </div>