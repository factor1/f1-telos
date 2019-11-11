<?php
/**
 * The search results template
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

get_header(); ?>

<section class="video-results">
  <div class="container">
    <div class="row">
      <div class="col-12 sm-col-11 sm-col-centered">
        <h2>Search results for "<?php echo get_search_query(); ?>"</h2>
      </div>

      <?php if( have_posts() ) :

          while( have_posts() ) : the_post();
          // Video CPT Custom Fields
          $link = get_field('video_link'); ?>

          <div class="col-4 sm-col-11 sm-col-centered">
            <div class="flex-video">
              <iframe src="<?php echo $link; ?>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>

            <h5 class="video-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
          </div>

        <?php endwhile; ?>

        <div class="col-12">
          <?php the_posts_pagination( array('mid_size' => 2) ); ?>
        </div>

      <?php else : ?>

        <div class="col-12">
          <h5 class="video-title">No results found.</h5>
        </div>

      <?php endif; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>
