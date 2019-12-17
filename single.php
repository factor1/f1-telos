<?php
/**
 * The single post template.
 *
 * Used when a single post is queried.
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

get_header();

get_template_part('parts/global/hero');

if( have_posts() ) : while( have_posts() ) : the_post();

  get_template_part('parts/global/centered-text-block');

endwhile; endif;

get_footer();
