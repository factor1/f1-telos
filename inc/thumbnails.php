<?php

/*-----------------------------------------------------------------------------
  Get featured image as url
-----------------------------------------------------------------------------*/
function featuredURL($size = 'full'){
  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size );
  $url = $thumb['0'];
  echo $url;
}

/*-----------------------------------------------------------------------------
  Adds thumbnail support and additional thumbnail sizes
-----------------------------------------------------------------------------*/

if( function_exists('prelude_features') ){
  // Use add_image_size below to add additional thumbnail sizes
  add_image_size( 'home_hero', 1900, 990, array('left', 'center') );
  add_image_size( 'hero', 1900, 967, array('center', 'center') );
  add_image_size( 'ipad', 1000, 750, array('center', 'center') );
  add_image_size( 'form_images_split', 2100, 975, array('left', 'center') );
  add_image_size( 'form_images_split_grid', 600, 400, array('center', 'center') );
  add_image_size( 'form_image_split_foreground', 720, 510, array('center', 'center') );
}
