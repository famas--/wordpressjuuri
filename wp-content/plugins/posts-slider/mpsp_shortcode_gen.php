<?php

/*
* Posts Slider Plugin Shortcode Generator.
* Creates shortcode by exracting post-ID.
*/
add_shortcode( 'mpsp_posts_slider', 'mpsp_shortcode_generate' );
function mpsp_shortcode_generate($atts, $content){
   ob_start();
  
	  extract( shortcode_atts( array(

			'id' => null,

		), $atts ) );


   include 'mpsp_slider_generator.php';


   return ob_get_clean();

	

}




 ?>