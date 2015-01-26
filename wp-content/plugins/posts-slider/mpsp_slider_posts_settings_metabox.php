<?php

function mpsp_slider_posts_settings($post){
    // $post is already set, and contains an object: the WordPress post
    global $post;
 //////////////////////////////////////////////////////////////////////////
                                                                        //  
                               //START                                 //
                                                                      //  
                                                                     //
    ///////  MAIN SETTINGS var assign BOX Starts HERE!!! /////////////

    $mpsp_post_types = get_post_meta($post->ID,'mpsp_post_types',true);
    $mpsp_posts_visible = get_post_meta($post->ID,'mpsp_posts_visible',true);
    $mpsp_posts_Desc_limit = get_post_meta($post->ID,'mpsp_posts_Desc_limit',true);
    $mpsp_posts_order = get_post_meta($post->ID,'mpsp_posts_order',true);
    $mpsp_posts_orderby = get_post_meta($post->ID,'mpsp_posts_orderby',true);
    $mpsp_posts_key = get_post_meta($post->ID,'mpsp_posts_key',true);
    $mpsp_posts_value = get_post_meta($post->ID,'mpsp_posts_value',true);
    $mpsp_posts_img_size = get_post_meta($post->ID,'mpsp_posts_img_size',true);
    $mpsp_slide_layout_custom = get_post_meta($post->ID,'mpsp_slide_layout_custom',true);



    wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );


    ?>

<div class='formLayout'>

  <div id="mpsp_slider_posts_settings">
    <br>
    <br>

    <label for="cs_post_types">Select Post Type :</label>

     <?php 
     $post_types = get_post_types('', 'names');

      echo "<select name='mpsp_post_types'>";


    foreach($post_types as $post_type) {
       ?>

      <option disabled value='<?php echo ucfirst($post_type);?>' <?php selected($post_type, $mpsp_post_types ); ?> ><?php echo ucfirst($post_type); ?> </option>
      <?php
     }

      echo "</select>";

     ?>
      <span id='mpsp_span'><a href='http://web-settler.com/posts-slider/' target='_blank'> This feature is only available in premium version.</span></a>
      <br>
      <br>
      <label for="mpsp_posts_Desc_limit">Excerpt :</label>
      <input type="number" name="mpsp_posts_Desc_limit" value="<?php echo $mpsp_posts_Desc_limit; ?>">
      <br>

      <label for="mpsp_posts_visible">No. of Posts In Slider :</label>
      <input type="number" name="mpsp_posts_visible" value="<?php echo $mpsp_posts_visible; ?>">
      
      <br>
      <br>
      <label for="mpsp_posts_order">Posts Order :</label>
      <select name="mpsp_posts_order">
        <option value="ASC"
<?php selected( "ASC", $mpsp_posts_order ); ?>


        >Ascending</option>
        <option value="DESC"
<?php selected( "DESC", $mpsp_posts_order ); ?>

        >Descending</option>

      </select>
      <br>
      <br>
      
      <label for="mpsp_posts_img_size">Image Size :</label>
      <select name="mpsp_posts_img_size">
        <option value="thumbnail"
<?php selected( "thumbnail",$mpsp_posts_img_size ); ?>


        >Small</option>
        <option value="medium"
<?php selected( "medium",$mpsp_posts_img_size ); ?>

        >Medium</option>
        <option value="large"
<?php selected( "large",$mpsp_posts_img_size ); ?>

        >Large</option>
        <option value="original"
<?php selected( "original",$mpsp_posts_img_size ); ?>

        >Original</option>

      </select>

      <h2 align="center">Select layout</h2>
      <label for="mpsp_slide_layout_custom"><img src="<?php echo plugins_url('img/layout-def.png',__FILE__); ?>" width="150px" height"150px"></label>

      <input disabled type="radio" name="mpsp_slide_layout_custom" value="" style="width:15px;"  <?php checked( "display:none;", $mpsp_slide_layout_custom ); ?>
   checked ><span id='mpsp_span'><a href='http://web-settler.com/posts-slider/' target='_blank'> This feature is only available in premium version.</span></a>
      <br>

      <label for="mpsp_slide_layout_custom"><img src="<?php echo plugins_url('img/layout-1.png',__FILE__); ?>" width="150px" height"150px"></label>
      <input type="radio" name="mpsp_slide_layout_custom"  value='float:left; margin-right:15px;' style="width:15px;"

<?php checked( "float:left; margin-right:15px;", $mpsp_slide_layout_custom ); ?>
      > <span id='mpsp_span'><a href='http://web-settler.com/posts-slider/' target='_blank'> This feature is only available in premium version.</span></a>
          <br>

      <label for="mpsp_slide_layout_custom"><img src="<?php echo plugins_url('img/layout-2.png',__FILE__); ?>" width="150px" height"150px"></label>
      <input disabled type="radio" name="mpsp_slide_layout_custom" style="width:15px;">
      <span id='mpsp_span'><a href='http://web-settler.com/posts-slider/' target='_blank'> This feature is only available in premium version.</span></a>
          <br>
          <label for="mpsp_slide_layout_custom"><img src="<?php echo plugins_url('img/layout-3.png',__FILE__); ?>" width="150px" height"150px"></label>
      <input  disabled type="radio" name="mpsp_slide_layout_custom" style="width:15px;" ><span id='mpsp_span'><a href='http://web-settler.com/posts-slider/' target='_blank'> This feature is only available in premium version.</span></a>
          <br>


  </div>
  
</div>
<a href="http://web-settler.com/posts-slider/" target="_blank" style='font-size:22px;'>To Unlock all layouts and more amazing features Click here</a>



<?php
  }


  ?>