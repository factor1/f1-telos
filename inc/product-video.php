<?php 
	
	
add_action( 'woocommerce_product_options_general_product_data', 'product_video_field' );
   function product_video_field() {
       $args = array(
           'id'    => 'product_video_field',
           'label'    => sanitize_text_field( 'Product Video' ),
           'placeholder'   => 'Cut and paste video embed code here',
           'desc_tip'    => true,
           'style'    => 'height:120px'

       );
       echo woocommerce_wp_textarea_input( $args );
   }

   add_action( 'woocommerce_process_product_meta', 'product_video_field_save' );
   


   function product_video_field_save($post_id) {
       $product_video_field = $_POST['product_video_field'];
       update_post_meta($post_id, 'product_video_field', $product_video_field);
}