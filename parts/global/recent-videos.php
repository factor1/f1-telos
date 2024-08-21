<?php
/*
 * Recent Videos (global)
 *
 * Template part used on various templates/views
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

// Recent Videos Custom Fields
$headline = get_sub_field('recent_videos_headline');
$filter = get_sub_field('recent_videos_filter_type'); // Filter by video type T/F
$type = get_sub_field('recent_video_type');
$btn = get_sub_field('recent_videos_button');

// WP_Query arguments
if( $type ) :
  $args = array(
    'post_type' => 'community-video',
    'posts_per_page' => 12,
    'tax_query' => array(
      array(
        'taxonomy' => 'video-type',
        'field' => 'term_id',
        'terms' => $type,
      )
    ),
  );
else :
  $args = array(
    'post_type' => 'community-video',
    'posts_per_page' => 12,
  );
endif;

// WP_Query
$videos = new WP_Query($args);

if( $videos->have_posts() ) : ?>

  <section class="recent-videos">
    <div class="container">
      <div class="row">
        <div class="col-12 sm-col-11 sm-col-centered">
          <h2><?php echo $headline; ?></h2>
        </div>

        <?php // Videos here
        while( $videos->have_posts() ) : $videos->the_post();
          // Video CPT Custom Fields
          $subtitle = get_field('video_subtitle');
          $link = get_field('video_link'); ?>

          <div class="col-4 sm-col-11 sm-col-centered">
            <div class="flex-video">
              <iframe src="<?php echo $link; ?>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
            </div>

            <h5 class="video-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
            <?php if($subtitle): ?>
              <p class="video-subtitle"><?php echo $subtitle; ?></p>
            <?php endif; ?>
          </div>

        <?php endwhile;

        // Optional button
        if( $btn ) : ?>

          <div class="col-12 sm-col-11 sm-col-centered">
            <a href="<?php echo esc_url($btn['url']); ?>" class="button button--ghost" role="link" title="<?php echo $btn['title']; ?>">
              <?php echo $btn['title']; ?>
            </a>
          </div>

        <?php endif; ?>

      </div>
    </div>
  </section>

<?php endif; wp_reset_postdata(); ?>
