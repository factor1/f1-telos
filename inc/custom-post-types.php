<?php
/*-----------------------------------------------------------------------------
  Register Custom Post Types
-----------------------------------------------------------------------------*/
// Register Testimonials Custom Post Type
function testimonials() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Testimonials', 'text_domain' ),
		'name_admin_bar'        => __( 'Testimonials', 'text_domain' ),
		'archives'              => __( 'Testimonial Archives', 'text_domain' ),
		'attributes'            => __( 'Testimonial Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Testimonial:', 'text_domain' ),
		'all_items'             => __( 'All Testimonials', 'text_domain' ),
		'add_new_item'          => __( 'Add New Testimonial', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Testimonial', 'text_domain' ),
		'edit_item'             => __( 'Edit Testimonial', 'text_domain' ),
		'update_item'           => __( 'Update Testimonial', 'text_domain' ),
		'view_item'             => __( 'View Testimonial', 'text_domain' ),
		'view_items'            => __( 'View Testimonials', 'text_domain' ),
		'search_items'          => __( 'Search Testimonial', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Testimonial', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'text_domain' ),
		'items_list'            => __( 'Testimonials list', 'text_domain' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Testimonials list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'text_domain' ),
		'description'           => __( 'Testimonials', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'testimonials',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimonial', $args );

}
add_action( 'init', 'testimonials', 0 );

// Register Community Videos Custom Post Type
function community_videos() {

	$labels = array(
		'name'                  => _x( 'Community Videos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Community Video', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Community Videos', 'text_domain' ),
		'name_admin_bar'        => __( 'Community Videos', 'text_domain' ),
		'archives'              => __( 'Community Video Archives', 'text_domain' ),
		'attributes'            => __( 'Community Video Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Community Video:', 'text_domain' ),
		'all_items'             => __( 'All Community Videos', 'text_domain' ),
		'add_new_item'          => __( 'Add New Community Video', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Community Video', 'text_domain' ),
		'edit_item'             => __( 'Edit Community Video', 'text_domain' ),
		'update_item'           => __( 'Update Community Video', 'text_domain' ),
		'view_item'             => __( 'View Community Video', 'text_domain' ),
		'view_items'            => __( 'View Community Videos', 'text_domain' ),
		'search_items'          => __( 'Search Community Video', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Community Video', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Community Video', 'text_domain' ),
		'items_list'            => __( 'Community Videos list', 'text_domain' ),
		'items_list_navigation' => __( 'Community Videos list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Community Videos list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Community Video', 'text_domain' ),
		'description'           => __( 'Community Videos', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt' ),
		'taxonomies'            => array( 'video-type', 'category' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 25,
		'menu_icon'             => 'dashicons-controls-play',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'community-videos',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'community-video', $args );

}
add_action( 'init', 'community_videos', 0 );

// Register Video Types Custom Taxonomy
function video_types() {

	$labels = array(
		'name'                       => _x( 'Video Types', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Video Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Video Types', 'text_domain' ),
		'all_items'                  => __( 'All Video Types', 'text_domain' ),
		'parent_item'                => __( 'Parent Video Type', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Video Type:', 'text_domain' ),
		'new_item_name'              => __( 'New Video Type Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Video Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Video Type', 'text_domain' ),
		'update_item'                => __( 'Update Video Type', 'text_domain' ),
		'view_item'                  => __( 'View Video Type', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Video Types with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Video Types', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Video Types', 'text_domain' ),
		'search_items'               => __( 'Search Video Types', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Video Types', 'text_domain' ),
		'items_list'                 => __( 'Video Types list', 'text_domain' ),
		'items_list_navigation'      => __( 'Video Types list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'video-type', array( 'community-video' ), $args );

}
add_action( 'init', 'video_types', 0 );
