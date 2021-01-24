  <div class="wrapper <?php block_field('className'); ?>">
    <section class="container full section-video-wrapper">
      <div class="columns-wrapper display-section video-section even">
        <div class="box col-12 nopadding">

          <video id="player" playsinline controls autoplay muted>
            <source src="<?php block_field( 'video-url' ); ?>" type="video/mp4" />
          </video>

        </div>
      </div>
    </section>
  </div>