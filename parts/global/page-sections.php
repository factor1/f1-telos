<?php
/*
 * Page Sections (global)
 *
 * Template part used on various templates/views
 *
 * @package F1 Telos Tennis
 * @author Factor1 Studios
 * @since 0.0.1
 */

if( have_rows('page_sections') ) : while( have_rows('page_sections') ) : the_row();

  if( get_row_layout() == 'centered_text_block' ) :

    get_template_part('parts/global/centered-text-block');

  endif;

endwhile; endif; ?>
