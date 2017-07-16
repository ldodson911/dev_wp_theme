<?php

//Enqueue Theme Style//

/*	function add_customtheme_stylesheet() {
	wp_enqueue_style('main', get_template_directory_uri() . 'assets/css/main.css');
}
	add_action( 'wp_enqueue_scripts', 'add_customtheme_stylesheet' ); 
*/
	function add_customtheme_styles() {
		wp_enqueue_style('style', get_template_directory_uri() . '/style.css'); 
		wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/ie8.css');
		wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/ie9.css');
		wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');
		wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
	}
	add_action( 'wp_enqueue_scripts', 'add_customtheme_styles');

//Javascript Registration//

	function js_registration() {
		wp_enqueue_script('jquery.min.js', get_template_directory_uri() . '/assets/js/jquery.min.js');
		wp_enqueue_script('jquery.scrollex.min.js', get_template_directory_uri() . '/assets/js/jquery.scrollex.min.js');
		wp_enqueue_script('jquery.scrolly.min.js', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js');
		wp_enqueue_script('skel.min.js', get_template_directory_uri() . '/assets/js/skel.min.js');
		wp_enqueue_script('util.js', get_template_directory_uri() . '/assets/js/util.js');
		wp_enqueue_script('main.js', get_template_directory_uri() . '/assets/js/main.js');
			}
	add_action('wp_enqueue_scripts', 'js_registration');
//notes - the order of javascript files called is important as it can create js errors if you are trying to use a variable before it is defined.  I originally had main.js first when i was registering these files and it produced an error.  Registering the file last eliminated the error//

//Navigation Menus//
	register_nav_menus(array(
			'primary'=>__('primary menu')
			));

///Add Featured Image Section to Post Types in WP Admin ///
	add_theme_support('post-thumbnails'); 
	


//Registering Custom Post Types//

function cptui_register_my_cpts_introduction() {

	/**
	 * Post Type: Introduction.
	 */

	$labels = array(
		"name" => __( 'Introduction', '' ),
		"singular_name" => __( 'Introduction', '' ),
	);

	$args = array(
		"label" => __( 'Introduction', '' ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "introduction", "with_front" => true ),
		"query_var" => true,
		"supports" => array( "title", "editor", "thumbnail" ),
	);

	register_post_type( "introduction", $args );
}

add_action( 'init', 'cptui_register_my_cpts_introduction' );


//de-register _admin_bar_bump_cb default behavior
function my_filter_head() {
  remove_action('wp_head', '_admin_bar_bump_cb');   
}
add_action('get_header', 'my_filter_head');