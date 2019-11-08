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

  elseif( get_row_layout() == 'form_image_split' ) :

    get_template_part('parts/global/form-image-split');

  elseif( get_row_layout() == 'testimonials_section' ) :

    get_template_part('parts/global/testimonials');

  elseif( get_row_layout() == 'plans_grid' ) :

    get_template_part('parts/global/plans-grid');

  elseif( get_row_layout() == 'text_image_split' ) :

    get_template_part('parts/global/text-image-split');

  elseif( get_row_layout() == 'form_section' ) :

    get_template_part('parts/global/form-section');

  elseif( get_row_layout() == 'featured_video' ) :

    get_template_part('parts/global/featured-video');

  endif;

endwhile; endif; ?>
