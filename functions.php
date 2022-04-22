<?php 


// Enqueue own styles
function enqueue_custom_styles() {
    wp_enqueue_style( 'themestyles',get_template_directory_uri() .'/kidstyles.css', array(),false,'all');
                      
}
add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );
                

?>