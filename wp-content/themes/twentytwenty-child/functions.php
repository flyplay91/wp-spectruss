<?php
add_action( 'wp_enqueue_scripts', 'twentytwenty_parent_styles' );
function twentytwenty_parent_styles() {
	wp_enqueue_style( 'slick-style', get_stylesheet_directory_uri().'/slick.css' );
 	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

add_action( 'wp_enqueue_scripts', 'twentytwenty_child_scripts' );
function twentytwenty_child_scripts() {
	wp_enqueue_script( 'jqery', get_stylesheet_directory_uri() . '/js/jquery.min.js', array( 'jquery' ), false, true );
 	wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/js/slick.min.js', array( 'jquery' ), false, true );
	wp_register_script( 'twentytwenty-child', get_stylesheet_directory_uri() . '/js/custom-js.js', array( 'jquery' ), false, true );
	wp_localize_script( 'twentytwenty-child', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));
	wp_enqueue_script( 'twentytwenty-child' );
}

add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
  $path = get_stylesheet_directory() . '/acf-json';
  return $path;
}

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Footer Menu',
		'menu_title'	=> 'Footer Menu',
		'menu_slug' 	=> 'theme-footer-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Menu',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}




add_action("wp_ajax_filter_posts", "custom_filter_posts_func");
add_action("wp_ajax_nopriv_filter_posts", "custom_filter_posts_func");

function custom_filter_posts_func()
{	
	$receivedPostCatId = $_POST['catgory_id'];
	$postObj = get_posts( array(
		'numberposts'	=> -1,
		'post_type'     => 'post',
		'post_status'   => 'publish',
		'sort_order' 	=> 'asc',
		'offset'        => 1,
		'category' 		=> $receivedPostCatId
	) );

	$link = [];
	$img = [];
	
	foreach ($postObj as $post) {
		$link[] = get_permalink( $post->ID );
		$img[] = get_the_post_thumbnail($post->ID, "large");
	}
	
	wp_send_json(array($postObj, $link, $img));
}