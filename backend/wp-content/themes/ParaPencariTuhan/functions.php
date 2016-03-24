<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

        
if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css' );

// END ENQUEUE PARENT ACTION

/* ==================================================================
 * wp_enqueue_script for custom js
 * ================================================================== */
add_action( 'wp_enqueue_scripts', 'theme_js' );
function theme_js() {
	wp_register_script('ajax_call', get_stylesheet_directory_uri() .'/main.js', array('jquery'), true);
	wp_enqueue_script('ajax_call');
	$translation_array = array( 'templateUrl' => get_stylesheet_directory_uri() );
	//after wp_enqueue_script
	wp_localize_script( 'ajax_call', 'object_name', $translation_array );
}

/* ==================================================================
 * Display child pages list
 * ================================================================== */
add_shortcode('wpb_childpages', 'wpb_list_child_pages');
function wpb_list_child_pages() { 
global $post; 
if ( is_page() && $post->post_parent )
	  $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
	else
	  $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
	if ( $childpages ) {
	  $string = '<ul class="__nodot __nopaddingleft __nomarginleft">' . $childpages . '</ul>';
	}
	return $string;
}

/* ==================================================================
 * Custom Pagination
 * ================================================================== */

function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination clearfix text-center'>";
      //echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }

}


/* ==================================================================
 * Enable Featured Image
 * ================================================================== */
add_theme_support( 'post-thumbnails' );

/* ==================================================================
 * Additional Image Sizes
 * ================================================================== */
add_image_size( 'site_logo_xs', 50, 50, true );
add_image_size( 'site_logo_md', 150, 150, true );
add_image_size( 'square_xs', 200, 200, true );
add_image_size( 'square_md', 350, 350, true );
add_image_size( 'mainBanner_lg', 1920, 600, true);
add_image_size( 'mainBanner_md', 992, 400, true);
add_image_size( 'mainBanner_xs', 600, 600, true);
add_image_size( 'video_thumb', 400, 200, hard);
add_image_size( 'bannerads_square', 310, 273, true);
add_image_size( 'bannerads_square_big', 755, 273, true);

function responsiveBanner() {
  global $post; 
  $post_id = $post->ID; 
  if (wp_is_mobile()) {
    // echo get_the_post_thumbnail($post_id, 'mainBanner_xs', array('class' => 'img-responsive __fullwidth'));
    the_post_thumbnail('mainBanner_xs', array('class' => 'img-responsive __fullwidth') );
  } else {
    // echo get_the_post_thumbnail($post_id, 'mainBanner_lg', array('class' => 'img-responsive __fullwidth'));
    the_post_thumbnail('mainBanner_lg', array('class' => 'img-responsive __fullwidth') );
  }
}

/* ==================================================================
 * Add Excerpt on Pages
 * ================================================================== */

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}


/* ==================================================================
 * Custom Function
 * ================================================================== */

function isItHome($args1, $args2) {
  if (is_front_page()) {
    echo $args1;
  } else {
    echo $args2;
  }
}


function get_the_slug( $id=null ){
  if( empty($id) ):
    global $post;
    if( empty($post) )
      return ''; // No global $post var available.
    $id = $post->ID;
  endif;

  $slug = basename( get_permalink($id) );
  return $slug;
}

/**
 * Display the page or post slug
 *
 * Uses get_the_slug() and applies 'the_slug' filter.
 */
function the_slug( $id=null ){
  echo apply_filters( 'the_slug', get_the_slug($id) );
}

/* ==================================================================
 * Retrieve current url
 * ================================================================== */

function current_page_url() {
  $pageURL = 'http';
  if( isset($_SERVER["HTTPS"]) ) {
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
  }
  $pageURL .= "://";
  if ($_SERVER["SERVER_PORT"] != "80") {
    $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
  } else {
    $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
  }
  return $pageURL;
}


?>