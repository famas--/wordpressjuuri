<?php

function mpsp_custom_post_type(){
  $labels = array(
    'name' => _x('Posts Slider','post type general name'),
    'singular_name' => _x('Posts Slider','post type singular name'),
    'add_new' => _x('Add New','Posts Slider'),
    'add_new_item' => __('Add new Posts Slider'),
    'edit_item' => __('Edit Posts Slider'),
    'new_item' => __('New Posts Slider'),
    'all_items' => __('All Posts Sliders'),
    'view_itme' => __('View Posts Slider'),
    'search_items' => __('Search Posts Slider'),
    'not_found' => __('No Posts Slider found'),
    'not_found_in_trash' => __('No Posts Slider found in trash'),
    'parent_item_colon' => "",
    'menu_name' => 'Posts Slider'

    );
  $args = array(
    'labels' => $labels,
    'description' => 'Create Posts Slider',
    'menu_position' => 15,
    'public' => true,
    'supports' => array('title','custom_fields'),
    'has_archive' => true,
    'capability_type' => 'post',
    'query_var' => 'mpsp_slider',
    'menu_icon' => 'dashicons-welcome-add-page',
    'show_in_menu' => true
    );


  register_post_type('mpsp_slider',$args);
}

add_action('init','mpsp_custom_post_type');



add_action("load-post-new.php","mpsp_count_user_posts_by_type");

    function mpsp_count_user_posts_by_type( $userid, $post_type = 'mpsp_slider' ) {
    global $wpdb;

    $userid = get_current_user_id();

    $where = get_posts_by_author_sql( $post_type, true, $userid );

    $count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts $where" );

    $screen = get_current_screen();

    if (current_user_can( 'edit_posts') and $screen->post_type === 'mpsp_slider') { 
        //Is  admin and all users - so impose the limit
        if($count>=1)
            header("Location: /wp-content/plugins/posts-slider/phuf.php");
            

        }
    }




 ?>