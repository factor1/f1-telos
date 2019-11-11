<?php
/*-----------------------------------------------------------------------------
  Register Shortcodes
-----------------------------------------------------------------------------*/
function custom_shortcode_func() {
	ob_start();
	$current_user = wp_get_current_user();
	echo $current_user->display_name . '<br />';
	$output = ob_get_clean();
    return $output;
}
add_shortcode('current_user', 'custom_shortcode_func');
