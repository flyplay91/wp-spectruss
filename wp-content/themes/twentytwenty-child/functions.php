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
 	wp_enqueue_script( 'twentytwenty-child', get_stylesheet_directory_uri() . '/js/custom-js.js', array( 'jquery' ), false, true );
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

// Custom Post News
function custom_news() {
	$supports = array(
	  'title',
	  'editor',
	  'author',
	  'thumbnail',
	  'custom-fields',
	  'comments',
	  'revisions',
	  'post-formats',
	);
	$labels = array(
	  'name' => _x('news', 'plural'),
	  'singular_name' => _x('news', 'singular'),
	  'menu_name' => _x('News', 'admin menu'),
	  'name_admin_bar' => _x('News', 'admin bar'),
	  'add_new' => _x('Add  News', 'add news'),
	  'add_new_item' => __('Add New News'),
	  'new_item' => __('New News'),
	  'edit_item' => __('Edit News'),
	  'view_item' => __('View News'),
	  'all_items' => __('All News'),
	  'search_items' => __('Search News'),
	  'not_found' => __('No News found.'),
	);
	$args = array(
	  'supports' => $supports,
	  'labels' => $labels,
	  'public' => true,
	  'query_var' => true,
	  'rewrite' => array('slug' => 'news-category'),
	  'has_archive' => true,
	  'hierarchical' => false,
	  'taxonomies' => array( 'news_category' )
	);
	register_post_type('news-category', $args);
  }
  add_action('init', 'custom_news');
