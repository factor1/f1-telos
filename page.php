<?php
/**
 * The default template
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

get_header();

get_template_part('parts/global/hero');

if( have_posts() ) : while( have_posts() ) : the_post();

  if( get_the_content() ) : ?>

    <div class="centered-text-block">
      <div class="container">
        <div class="row">
          <div class="col-10 col-centered">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>

  <?php endif;

endwhile; endif;

get_template_part('parts/global/page-sections');

get_footer(); ?>
