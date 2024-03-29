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

  elseif( get_row_layout() == 'testimonials_grid' ) :

    get_template_part('parts/global/testimonials-grid');

  elseif( get_row_layout() == 'plans_grid' ) :

    get_template_part('parts/global/plans-grid');

  elseif( get_row_layout() == 'text_image_split' ) :

    get_template_part('parts/global/text-image-split');

  elseif( get_row_layout() == 'form_section' ) :

    get_template_part('parts/global/form-section');

  elseif( get_row_layout() == 'featured_video' ) :

    get_template_part('parts/global/featured-video');

  elseif( get_row_layout() == 'recent_videos' ) :

    get_template_part('parts/global/recent-videos');

  elseif( get_row_layout() == 'search_videos' ) :

    get_template_part('parts/global/search-videos');

  elseif( get_row_layout() == '50_50_section' ) :

    get_template_part('parts/global/50-50-split');
 
  elseif( get_row_layout() == '3_column_grid' ) :

    get_template_part('parts/global/3-col');

  endif;

endwhile; endif; ?>
