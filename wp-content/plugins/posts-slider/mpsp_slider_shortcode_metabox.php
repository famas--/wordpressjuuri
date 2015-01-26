<?php
function mpsp_slider_posts_shortcode($post){
    // $post is already set, and contains an object: the WordPress post
    global $post;
 //////////////////////////////////////////////////////////////////////////
                                                                        //  
                               //START                                 //
                                                                      //  
                                                                     //
    ///////  MAIN SETTINGS var assign BOX Starts HERE!!! /////////////

    $postid = $post->ID;

    ?>
 <style type="text/css">
      #mpsp_slider_posts_shortcode{
      border-top: 4px solid #A7D476;
    }
    </style>
    <p> Use following Shortcode in your posts or text widget to show Posts Slider.</p>
    <p style='font-weight:bold; font-size:20px;'>[mpsp_posts_slider id='<?php echo $postid; ?>']</p>
    

    <?php


 }


 ?>