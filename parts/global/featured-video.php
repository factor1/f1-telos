<?php
/*
 * Featured Video (global)
 *
 * Template part used on various templates/views
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Featured Video Custom Fields
$video = get_sub_field('featured_video');

if( $video ) :
  $post = $video;
  setup_postdata( $post );

  // Video CPT Custom Fields
  $link = get_field('video_link'); ?>

  <section class="featured-video">
    <div class="container">
      <div class="row">
        <div class="col-12 sm-col-11 sm-col-centered">
          <div class="featured-video__block">
            <div class="flex-video">
              <iframe src="<?php echo $link; ?>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>

            <div class="featured-video__content">
              <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php wp_reset_postdata(); endif; ?>
