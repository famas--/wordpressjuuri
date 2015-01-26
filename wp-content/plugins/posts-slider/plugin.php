<?php 




function mpsp_style(){

  wp_register_style('mpsp-custom-style',plugins_url('css/custom_style.css',__FILE__));
  wp_enqueue_style( 'mpsp-custom-style');
}

add_filter('init','mpsp_style');

function mpsp_script(){
  
	wp_enqueue_script('mpsp_script1',plugins_url('owl-carousel/owl.carousel.js',__FILE__));
wp_enqueue_script("jquery");
}
add_filter('init','mpsp_script');

function slider_html(){
ob_start();

    //SLider 
  $mpsp_slide_items =get_option('mpsp_slide_items');
  $mpsp_slide_single =get_option('mpsp_slide_single');
  $mpsp_slide_speed =get_option('mpsp_slide_speed');
  $mpsp_slide_autoplay =get_option('mpsp_slide_autoplay');
  $mpsp_slide_navigation = get_option('mpsp_slide_navigation');
  $mpsp_slide_pagination = get_option('mpsp_slide_pagination');
  $mpsp_slide_transistion = get_option('mpsp_slide_transistion');
  $mpsp_slide_pagination_numbers =get_option('mpsp_slide_pagination_numbers');
  $mpsp_slide_main_heading =get_option('mpsp_slide_main_heading');
  $mpsp_slide_main_head_bar =get_option('mpsp_slide_main_head_bar');
  $mpsp_slide_gradient =get_option('mpsp_slide_gradient');
  $mpsp_slide_layout_custom = get_option('mpsp_slide_layout_custom');
  $mpsp_slide_nav_button_position = get_option('mpsp_slide_nav_button_position');
  $psp_slide_nav_button_color = get_option('mpsp_slide_nav_button_color');
  $mpsp_slide_custom_width = get_option('mpsp_slide_custom_width');
   $mpsp_post_types =get_option('mpsp_post_types');


  //POsts
  $mpsp_posts_visible = get_option('mpsp_posts_visible');
  $mpsp_posts_order = get_option('mpsp_posts_order');
  $mpsp_posts_orderby = get_option('mpsp_posts_orderby');
  $mpsp_posts_key = get_option('mpsp_posts_key');
  $mpsp_posts_value = get_option('mpsp_posts_value');
  $mpsp_posts_tag = get_option('mpsp_posts_tag');
  $mpsp_posts_img =get_option('mpsp_posts_img');
  $mpsp_posts_img_size =get_option('mpsp_posts_img_size');
  $mpsp_posts_heading_color =get_option('mpsp_posts_heading_color');
  $mpsp_posts_description_color =get_option('mpsp_posts_description_color');
  $mpsp_posts_bg_color =get_option('mpsp_posts_bg_color');
  $mpsp_posts_Desc_limit =get_option('mpsp_posts_Desc_limit');
  $mpsp_post_types =get_option('mpsp_post_types');



	?>

<?php echo $mpsp_slide_nav_button_position; ?>
<style>
.owl-buttons{
  color:<?php echo get_option('mpsp_slide_nav_button_color');?>
}



</style>






<div id="mpsp_wrapper" style= " background-color:<?php echo $mpsp_posts_bg_color;?>; padding:10px; margin:40px; border-radius:5px; width:<?php echo $mpsp_slide_custom_width; ?>;  <?php echo $mpsp_slide_gradient; ?>    ">


    <h1 align="center"style="width:99%;

    background: #ffffff;
background: -moz-linear-gradient(top,  #ffffff 0%, #e5e5e5 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffffff), color-stop(100%,#e5e5e5));
background: -webkit-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%);
background: -o-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%);
background: -ms-linear-gradient(top,  #ffffff 0%,#e5e5e5 100%);
background: linear-gradient(to bottom,  #ffffff 0%,#e5e5e5 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#e5e5e5',GradientType=0 );

 height:;    display:<?php echo $mpsp_slide_main_head_bar; ?>;  border-radius:3px;">
     <?php echo $mpsp_slide_main_heading; ?>
   </h1> 




  
             
              <div id="owl-demo" class="owl-carousel">
                
          <?php

          
function string_limit_words_mpsp($string, $word_limit,$mpsp_posts_Desc_limit)
{

  $mpsp_posts_Desc_limit = get_option('mpsp_posts_Desc_limit');
  $words = explode(' ', $string, ($word_limit + $mpsp_posts_Desc_limit));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}



              // WP_Query arguments
                  $args = array (
                    'post_type'              => $mpsp_post_types, 
                    $mpsp_posts_key          => $mpsp_posts_value,
                    'posts_per_page'         => $mpsp_posts_visible,
                    'order'                  => $mpsp_posts_order,
                    'orderby'                => $mpsp_posts_orderby,

                  );

// The Query
                  $the_query = new WP_Query( $args );

           function get_attachment_id_from_src ($image_src) {

                    global $wpdb;
                    $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
                     $id = $wpdb->get_var($query);
                   }

          while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
    <div> 
         <h1 class='mpsp_slider_h1' id="mpsp_title" align="center" style="font-size:35px;"><a href="<?php the_permalink() ?>" target="_blank" style= "text-align:center;color:<?php echo $mpsp_posts_heading_color;?>;  text-decoration:none;"><?php the_title(); ?>
         </a></h1>
         
	     
       <div class="mpsp_img" style="<?php echo $mpsp_slide_layout_custom; ?>;margin:5px;">


        
       
        <?php  ?> <!-- Post Featured Image --></div>
       <a href="<?php the_permalink() ?>" target="_blank" style="text-decoration:none; color:<?php echo $mpsp_posts_description_color;?>;"><p id="mpsp_desc" style="margin:5px;">
         <?php

               $excerpt = get_the_excerpt(__('(more…)'));
              echo string_limit_words_mpsp($excerpt,$mpsp_posts_Desc_limit,$string,$word_limit);
            ?> </p>

            
          

          <!-- Linked Post Description  -->
         </a>
       

         

         


           







    </div>

<?php endwhile;?>


               
            </div>
          </div>

            <script>

            jQuery(document).ready(function() {
 
         jQuery("#owl-demo").owlCarousel({
              autoPlay : <?php echo $mpsp_slide_autoplay; ?>,
              stopOnHover : true,
              navigation: <?php echo $mpsp_slide_navigation; ?>,
              paginationSpeed : 1000,
              goToFirstSpeed : 2000,
              singleItem : <?php echo $mpsp_slide_single; ?>,
              autoHeight : true,
              transitionStyle: <?php echo $mpsp_slide_transistion; ?>,
              pagination : <?php echo $mpsp_slide_pagination; ?>,
              paginationNumbers :<?php echo $mpsp_slide_pagination_numbers; ?>,
              navigationText : ["<b><</b>", "<b>></b>"],

        });
       });

         



            </script>

          <?php

          return ob_get_clean();
}

add_shortcode('mpsp_posts_slider','slider_html');

 

register_activation_hook(__FILE__,'mpsp_active_options');

function mpsp_active_options(){
// add_option('name','')

  // Slider Options
  add_option('mpsp_slide_items');
  add_option('mpsp_slide_single');
  add_option('mpsp_slide_speed');
  add_option('mpsp_slide_autoplay');
  add_option('mpsp_slide_navigation');
  add_option('mpsp_slide_pagination','false');
  add_option('mpsp_slide_transistion','false');
  add_option('mpsp_slide_pagination_numbers','');
  add_option('mpsp_slide_main_heading','');
  add_option('mpsp_slide_main_head_bar','');
  add_option('mpsp_slide_gradient','');
  add_option('mpsp_slide_layout_custom','');
  add_option('mpsp_slide_nav_button_position','');
  add_option('mpsp_slide_nav_button_color','');
  add_option('mpsp_slide_custom_width','');

  //Posts Options 

    add_option('mpsp_posts_visible','5');
    add_option('mpsp_posts_order','ASC');
    add_option('mpsp_posts_orderby','rand');
    add_option('mpsp_posts_key','');
    add_option('mpsp_posts_value','');
    add_option('mpsp_posts_tag','');
    add_option('mpsp_posts_img','');
    add_option('mpsp_posts_img_size','');
    add_option('mpsp_posts_heading_color','');
    add_option('mpsp_posts_description_color','');
    add_option('mpsp_posts_bg_color','');
    add_option('mpsp_posts_Desc_limit','');
    add_option('mpsp_post_types','');

    


}


add_action('wp_head','mpsp_options_set_to_head');

function mpsp_options_set_to_head(){
 // $option = get_option('some option');

  //SLider 
  $mpsp_slide_items =get_option('mpsp_slide_items');
  $mpsp_slide_single =get_option('mpsp_slide_single');
  $mpsp_slide_speed =get_option('mpsp_slide_speed');
  $mpsp_slide_autoplay =get_option('mpsp_slide_autoplay');
  $mpsp_slide_navigation = get_option('mpsp_slide_navigation');
  $mpsp_slide_pagination = get_option('mpsp_slide_pagination');
  $mpsp_slide_transistion = get_option('mpsp_slide_transistion');
  $mpsp_slide_main_heading =get_option('mpsp_slide_main_heading');
  $mpsp_slide_main_head_bar =get_option('mpsp_slide_main_head_bar');
  $mpsp_slide_gradient =get_option('mpsp_slide_gradient');
  $mpsp_slide_layout_custom = get_option('mpsp_slide_layout_custom');
  $mpsp_slide_nav_button_position = get_option('mpsp_slide_nav_button_position');
  $psp_slide_nav_button_color = get_option('mpsp_slide_nav_button_color');
  $mpsp_slide_custom_width = get_option('mpsp_slide_custom_width');

  //POsts
  $mpsp_posts_visible = get_option('mpsp_posts_visible');
  $mpsp_posts_order = get_option('mpsp_posts_order');
  $mpsp_posts_orderby = get_option('mpsp_posts_orderby');
  $mpsp_posts_key = get_option('mpsp_posts_key');
  $mpsp_posts_value = get_option('mpsp_posts_value');
  $mpsp_posts_tag = get_option('mpsp_posts_tag');
  $mpsp_posts_img =get_option('mpsp_posts_img');
  $mpsp_posts_img_size =get_option('mpsp_posts_img_size');
  $mpsp_posts_heading_color =get_option('mpsp_posts_heading_color');
  $mpsp_posts_description_color =get_option('mpsp_posts_description_color');
  $mpsp_posts_bg_color =get_option('mpsp_posts_bg_color');
  $mpsp_posts_Desc_limit =get_option('mpsp_posts_Desc_limit');
  $mpsp_slide_pagination_numbers =get_option('mpsp_slide_pagination_numbers');
  $mpsp_post_types =get_option('mpsp_post_types');









}
add_action('admin_init','mpsp_register_options_mpsp');
function mpsp_register_options_mpsp(){
  // register_setting('mpsp_options_group','option');
    register_setting('mpsp_options_group','mpsp_slide_items');
    register_setting('mpsp_options_group','mpsp_slide_single');
    register_setting('mpsp_options_group','mpsp_slide_speed');
    register_setting('mpsp_options_group','mpsp_slide_autoplay');
    register_setting('mpsp_options_group','mpsp_slide_navigation');
    register_setting('mpsp_options_group','mpsp_slide_pagination');
    register_setting('mpsp_options_group','mpsp_slide_transistion');
    register_setting('mpsp_options_group','mpsp_slide_pagination_numbers');
    register_setting('mpsp_options_group','mpsp_slide_main_head_bar');
    register_setting('mpsp_options_group','mpsp_slide_gradient');
    register_setting('mpsp_options_group','mpsp_slide_layout_custom');
    register_setting('mpsp_options_group','mpsp_slide_nav_button_position');
    register_setting('mpsp_options_group','mpsp_slide_nav_button_color');
    register_setting('mpsp_options_group','mpsp_slide_custom_width');


    register_setting('mpsp_options_group','mpsp_posts_visible');
    register_setting('mpsp_options_group','mpsp_posts_order');
    register_setting('mpsp_options_group','mpsp_posts_orderby');
    register_setting('mpsp_options_group','mpsp_posts_key');
    register_setting('mpsp_options_group','mpsp_posts_value');
    register_setting('mpsp_options_group','mpsp_posts_tag');
    register_setting('mpsp_options_group','mpsp_posts_img');
    register_setting('mpsp_options_group','mpsp_posts_img_size');
    register_setting('mpsp_options_group','mpsp_posts_heading_color');
    register_setting('mpsp_options_group','mpsp_posts_description_color');
    register_setting('mpsp_options_group','mpsp_posts_bg_color');
    register_setting('mpsp_options_group','mpsp_posts_Desc_limit');
    register_setting('mpsp_options_group','mpsp_slide_main_heading');
    register_setting('mpsp_options_group','mpsp_post_types');


}


add_action('admin_menu','mpsp_settings_page_mpsp');
function mpsp_settings_page_mpsp(){
    add_menu_page(
      'Posts Slider',
      'Posts Slider',
      'administrator',
      'mpsp_settings_slug',
      'mpsp_options_page_func'
     );
}


function mpsp_options_page_func(){
  ?>

  


   <div class="formLayout">
    <h3 class="slide_hed">Slider Settings</h3>
    <div id="slider_settings">
    <form method="post" action="options.php">
      <?php settings_fields( 'mpsp_options_group' );?>
      <?php do_settings_sections( 'mpsp_options_group' );?>
      <br>
      <br>
      <br>

      <label for="mpsp_posts_bg_color">Background Color :</label>
      <input type="color" name="mpsp_posts_bg_color" value="<?php echo get_option('mpsp_posts_bg_color'); ?>">
      <br>
      <br>
      <textarea name="mpsp_slide_gradient" placeholder='Use Only for css gradient codes, For hex codes use "background: " before the code. e.g "background:#e3e3e3;"' value="<?php echo get_option('mpsp_slide_gradient');?>" style="float:right;margin-right:100px"></textarea>
      <br>
      <br>
      <br>
      <br>
      <label for="mpsp_posts_heading_color">Slide Heading Color :</label>
      <input type="color" name="mpsp_posts_heading_color" value="<?php echo get_option('mpsp_posts_heading_color'); ?>">
      <br>
      <br>

    <label for="mpsp_posts_description_color">Description Color :</label>
      <input type="color" name="mpsp_posts_description_color" value="<?php echo get_option('mpsp_posts_description_color'); ?>">

      <br>
      <br>
      

      <label for="mpsp_slide_speed">Slide Speed :</label>
      <input type="number" name="mpsp_slide_speed" value="<?php echo get_option('mpsp_slide_speed'); ?>" placeholder="200">
      <br>
      <br>

    <label for="mpsp_slide_transistion">Select Transition :</label>
    <select name="mpsp_slide_transistion" value="<?php get_option('mpsp_slide_transistion');?>">
      <option value="false"

      <?php selected( 'false', get_option('mpsp_slide_transistion') ); ?> >none</option>
      <option value="'fade'"

      <?php selected( "'fade'", get_option('mpsp_slide_transistion') ); ?> >fade</option>
      <option value="'backSlide'"
      <?php selected( "'backSlide'", get_option('mpsp_slide_transistion') ); ?>
      >backSlide</option>
      <option value="'goDown'"
<?php selected( "'goDown'", get_option('mpsp_slide_transistion') ); ?>

      >goDown</option>
      <option value="'fadeUp'"
<?php selected( "'fadeUp'", get_option('mpsp_slide_transistion') ); ?>

      >fadeUp</option>

      </select>

      <input type="text" name="mpsp_slide_main_heading" value="<?php echo get_option('mpsp_slide_main_heading');?>"style="width:130px;">

      <br>
     <br>

    
      <label for="mpsp_slide_single"> Carousel :</label>
      <select name="mpsp_slide_single">
        <option value="false"
        <?php selected( 'false', get_option('mpsp_slide_single') ); ?>

        >Enable </option>
        <option value="true" 
                <?php selected( 'true', get_option('mpsp_slide_single') ); ?>

    >Disable</option>

      </select>
      <br>
      <br>

      <label for="mpsp_slide_autoplay">Auto Play :</label>
      <select name="mpsp_slide_autoplay">
        <option value="true"
<?php selected( "true", get_option('mpsp_slide_autoplay') ); ?>


        >Enable</option>
        <option value="false"
<?php selected( "false", get_option('mpsp_slide_autoplay') ); ?>


        >Disable</option>

      </select>
      <br>
      <br>


      <label for="mpsp_slide_pagination"> Pagination :</label>
      <select name="mpsp_slide_pagination">
        <option value="true"
<?php selected( "true", get_option('mpsp_slide_pagination') ); ?>


        >Enable</option>
        <option value="false"
<?php selected( "false", get_option('mpsp_slide_pagination') ); ?>


        >Disable</option>

      </select>
      <br>
      <br>
      <label for="mpsp_slide_pagination_numbers">Pagination Numbers :</label>
      <select name="mpsp_slide_pagination_numbers">
        <option value="true"
<?php selected( "true", get_option('mpsp_slide_pagination_numbers') ); ?>


        >Enable</option>
        <option value="false"
<?php selected( "false", get_option('mpsp_slide_pagination_numbers') ); ?>


        >Disable</option>

      </select>

      
      <br>
      <br>
      <label for="mpsp_slide_main_head_bar">Slider Title Bar :</label>
      <select name="mpsp_slide_main_head_bar">
        <option value=""
<?php selected( "", get_option('mpsp_slide_main_head_bar') ); ?>

        >Enable</option>
        <option value="none"
<?php selected( "none", get_option('mpsp_slide_main_head_bar') ); ?>


        >Disable</option>

      </select>
      <br>
      <br>
      <label for="mpsp_slide_main_heading">Slider Title Bar Text  :</label>
      <input type="text" name="mpsp_slide_main_heading" value="<?php echo get_option('mpsp_slide_main_heading');?>"style="width:130px;">

      <input type="text" name="mpsp_slide_main_heading" value="<?php echo get_option('mpsp_slide_main_heading');?>"style="width:130px;">



      <br>
      <br>
      <label for="mpsp_slide_navigation">Navigation Buttons</label>
      <select name="mpsp_slide_navigation">
        <option value="true" <?php selected( 'true', get_option('mpsp_slide_navigation') ); ?>>Enable</option>
        <option value="false" <?php selected( 'false', get_option('mpsp_slide_navigation') ); ?>>Disable</option>
      </select>
      <br>
      <br>

            <label for="mpsp_slide_nav_button_position">Navigation Buttons Position :</label>
      <select name="mpsp_slide_nav_button_position">
        <option value=""
<?php selected( "", get_option('mpsp_slide_nav_button_position') ); ?>

        >Default</option>
        <option value="<style type='text/css'>.owl-buttons{left:43%;position:relative;}</style>"    
<?php selected( "<style type='text/css'>.owl-buttons{left:43%;position:relative;}</style>", get_option('mpsp_slide_nav_button_position') ); ?>


     >Right</option>
     <input type="text" name="mpsp_slide_main_heading" value="<?php echo get_option('mpsp_slide_main_heading');?>"style="width:130px;">
        <option value="<style type='text/css'> .owl-buttons{ left:-45%; position:relative;}</style>"
<?php selected( "<style type='text/css'> .owl-buttons{ left:-45%; position:relative;}</style>", get_option('mpsp_slide_nav_button_position') ); ?>


        >Left</option>

      </select>
      <br>
      <br>
      <label for="mpsp_slide_nav_button_color">Navigation Buttons Color :</label>
      <input type="color" name="mpsp_slide_nav_button_color" value="<?php echo get_option('mpsp_slide_nav_button_color'); ?>">
      <br>
      <br>
      <label for="mpsp_slide_custom_width">Custom Slider Width :</label>
      <input type="text" placeholder="Leave blank for responsive slider" name="mpsp_slide_custom_width" value="<?php echo get_option('mpsp_slide_custom_width'); ?>" style="width:190px;">
      <br>
      <br>
      <label for="shorcode_mpsp">Shorcode :</label>
      <input type="text" name="shortcode_mpsp" value="[mpsp_slider]" disabled style="width:110px;background-color:#e3e3e3;color:#000;">




    
    </div>
    <h3 class='slide_hed_posts'>Posts Settings</h3>

    <div id="posts_settings">

      <br>
      <br>
      <br>

      <label for="cs_post_types">Select Post Type :</label>

     <?php 
     $post_types = get_post_types('', 'names');

      echo "<select name='mpsp_post_types'>
      <option value='' selected( 'select', get_option('mpsp_post_types') );>Select</option>
      ";


    foreach($post_types as $post_type) {
       ?>

      <option value='<?php echo $post_type;?>' <?php selected($post_type, get_option('mpsp_post_types') ); ?> ><?php echo $post_type;?> </option>
      <?php
     }

      echo "</select>";

     ?>
      <br>
      <br>


      <label for="mpsp_posts_visible">No. of Posts In Slider :</label>
      <input type="number" name="mpsp_posts_visible" value="<?php echo get_option('mpsp_posts_visible'); ?>">
      <br>
      <br>
      <label for="mpsp_posts_Desc_limit">Description Words Limit :</label>
      <input type="number" name="mpsp_posts_Desc_limit" value="<?php echo get_option('mpsp_posts_Desc_limit'); ?>">
      <br>
      <br>
      <label for="mpsp_posts_order">Posts Order :</label>
      <select name="mpsp_posts_order">
        <option value="ASC"
<?php selected( "ASC", get_option('mpsp_posts_order') ); ?>


        >Ascending</option>
        <option value="DESC"
<?php selected( "DESC", get_option('mpsp_posts_order') ); ?>

        >Descending</option>

      </select>
      <br>
      <br>

      <label for="mpsp_posts_orderby"  title="Sort retrieved posts by.">Posts Order By :</label >
      <select name="mpsp_posts_orderby">
        <option selected value=""
        >Choose..</option>
        <option value="none" 

        <?php selected( 'none', get_option('mpsp_posts_orderby') ); ?>

        >None</option>
        <option value="rand"
        <?php selected( 'rand', get_option('mpsp_posts_orderby') ); ?>

        >Random</option>
        <option value="id"
        <?php selected( 'id', get_option('mpsp_posts_orderby') ); ?>

        >ID</option>
        <option value="title"
        <?php selected( 'title', get_option('mpsp_posts_orderby') ); ?>

        >Title</option>
        <option value="name"
        <?php selected( 'name', get_option('mpsp_posts_orderby') ); ?>
>Slug</option>
        <option value="date"
        <?php selected( 'date', get_option('mpsp_posts_orderby') ); ?>

        >Date - Default</option>
        <option value="modified"
        <?php selected( 'modified', get_option('mpsp_posts_orderby') ); ?>
        >Modified Date</option>
        <option value="parent"
        <?php selected( 'parent', get_option('mpsp_posts_orderby') ); ?>

        >Parent ID</option>
        <option value="menu_order" <?php selected( 'menu_order', get_option('mpsp_posts_orderby') ); ?>>Comment Count</option>>Menu Order</option>
        <option value="comment_count" <?php selected( 'comment_count', get_option('mpsp_posts_orderby') ); ?>>Comment Count</option>
        

      </select>
      <br>
      <br>


      <label for="mpsp_posts_key">Get Posts By :</label>
      <select name="mpsp_posts_key">
        <option value="">Choose..</option>
        <option value="category_name"
<?php selected( "category_name", get_option('mpsp_posts_key') ); ?>

        >Category Name</option>
        <option value="post_name"
<?php selected( "post_name", get_option('mpsp_posts_key') ); ?>

        >Post Name</option>
        <option value="tag_name"
<?php selected( "tag_name", get_option('mpsp_posts_key') ); ?>

        >Tag Name</option>
        <option value="author_name"
<?php selected( "author_name", get_option('mpsp_posts_key') ); ?>

        >Author Name</option>

      </select>
      <br>
      <br>
      <label for="mpsp_posts_value">Get Posts By (Value) :</label>
      <input type="text" name="mpsp_posts_value" value="<?php echo get_option('mpsp_posts_value'); ?>" placeholder="i.e category name" style="width:150px;">

      <br>
      <br>
      
      <label for="mpsp_posts_img_size">Image Size :</label>
      <select name="mpsp_posts_img_size">
        <option value="thumbnail"
<?php selected( "thumbnail", get_option('mpsp_posts_img_size') ); ?>


        >Small</option>
        <option value="medium"
<?php selected( "medium", get_option('mpsp_posts_img_size') ); ?>

        >Medium</option>
        <option value="large"
<?php selected( "large", get_option('mpsp_posts_img_size') ); ?>

        >Large</option>
        <option value="original"
<?php selected( "original", get_option('mpsp_posts_img_size') ); ?>

        >Original</option>

      </select>

      <h2 align="center">Select layout</h2>
      <label for="mpsp_slide_layout_custom"><img src="<?php echo plugins_url('img/layout-def.png',__FILE__); ?>" width="150px" height"150px"></label>

      <input type="radio" name="mpsp_slide_layout_custom" value="display:none;" style="width:15px;"  <?php checked( "display:none;", get_option('mpsp_slide_layout_custom') ); ?>
 >
      <br>

      <label for="mpsp_slide_layout_custom"><img src="<?php echo plugins_url('img/layout-1.png',__FILE__); ?>" width="150px" height"150px"></label>
      <input type="radio" name="mpsp_slide_layout_custom"  value='float:left; margin-right:15px;' style="width:15px;"

<?php checked( "float:left; margin-right:15px;", get_option('mpsp_slide_layout_custom') ); ?>
      >
          <br>

      <label for="mpsp_slide_layout_custom"><img src="<?php echo plugins_url('img/layout-2.png',__FILE__); ?>" width="150px" height"150px"></label>
      <input type="radio" name="mpsp_slide_layout_custom"
      value='margin-left:40%;'style="width:15px;" selected     
<?php checked( "margin-left:40%;", get_option('mpsp_slide_layout_custom') ); ?>
      >
          <br>
          <label for="mpsp_slide_layout_custom"><img src="<?php echo plugins_url('img/layout-3.png',__FILE__); ?>" width="150px" height"150px"></label>
      <input type="radio" name="mpsp_slide_layout_custom"

      value='float:right;margin-left:15px;' style="width:15px;"     
<?php checked( "float:right;margin-left:15px;", get_option('mpsp_slide_layout_custom') ); ?>

      >
          <br>




      
    <select name="mpsp_posts_img_size">
        <option value="thumbnail"
<?php selected( "thumbnail", get_option('mpsp_posts_img_size') ); ?>


        >Small</option>
        <option value="medium"
<?php selected( "medium", get_option('mpsp_posts_img_size') ); ?>

        >Medium</option>
        <option value="large"
<?php selected( "large", get_option('mpsp_posts_img_size') ); ?>

        >Large</option>
        <option value="original"
<?php selected( "original", get_option('mpsp_posts_img_size') ); ?>

        >Original</option>

      </select>

    
    
    

  </div>
  </div>
    <div style="position:relative; top:-115px; left:-45px;"> 
    <?php submit_button();?></div>
    
</form>






<?php


  //SLider 
  $mpsp_slide_items =get_option('mpsp_slide_items');
  $mpsp_slide_single =get_option('mpsp_slide_single');
  $mpsp_slide_speed =get_option('mpsp_slide_speed');
  $mpsp_slide_autoplay =get_option('mpsp_slide_autoplay');
  $mpsp_slide_navigation = get_option('mpsp_slide_navigation');
  $mpsp_slide_pagination = get_option('mpsp_slide_pagination');
  $mpsp_slide_transistion = get_option('mpsp_slide_transistion');
  $mpsp_slide_pagination_numbers =get_option('mpsp_slide_pagination_numbers');
  $mpsp_slide_main_heading =get_option('mpsp_slide_main_heading');
  $mpsp_slide_main_head_bar =get_option('mpsp_slide_main_head_bar');
  $mpsp_slide_gradient =get_option('mpsp_slide_gradient');
  $mpsp_slide_layout_custom = get_option('mpsp_slide_layout_custom');
  $mpsp_slide_nav_button_position = get_option('mpsp_slide_nav_button_position');
  $psp_slide_nav_button_color = get_option('mpsp_slide_nav_button_color');
  $mpsp_slide_custom_width = get_option('mpsp_slide_custom_width');


  //POsts
  $mpsp_posts_visible = get_option('mpsp_posts_visible');
  $mpsp_posts_order = get_option('mpsp_posts_order');
  $mpsp_posts_orderby = get_option('mpsp_posts_orderby');
  $mpsp_posts_key = get_option('mpsp_posts_key');
  $mpsp_posts_value = get_option('mpsp_posts_value');
  $mpsp_posts_tag = get_option('mpsp_posts_tag');
  $mpsp_posts_img =get_option('mpsp_posts_img');
  $mpsp_posts_img_size =get_option('mpsp_posts_img_size');
  $mpsp_posts_heading_color =get_option('mpsp_posts_heading_color');
  $mpsp_posts_description_color =get_option('mpsp_posts_description_color');
  $mpsp_posts_bg_color =get_option('mpsp_posts_bg_color');
  $mpsp_posts_Desc_limit =get_option('mpsp_posts_Desc_limit');


}


?>