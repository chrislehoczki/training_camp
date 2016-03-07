<?php 
add_action('wp_enqueue_scripts', 'learningWordpress_resources');

function learningWordPress_resources() {
	//wp_enqueue_style('style', get_stylesheet_uri());
	
	wp_enqueue_style( 'bootstrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css',false,'1.1','all');
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css',false,'1.1','all');
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css',false,'1.1','all');
	
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/jquery.flexslider.js', array ( 'jquery' ), 1.1, true);
	wp_enqueue_script( 'script2', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), 1.1, true);

}



//GET TOP ANCESTOR
function get_top_ancestor_id() {
	global $post;
	if ($post->post_parent) {
		//GETS ALL ANCESTORS AS ARRAY AND REVERSES
		$ancestors = array_reverse(get_post_ancestors($post->ID));
		//GET FIRST VALUE 
		return $ancestors[0];
	}
	return $post->ID;
};
// Does page have children?
function has_children() {
	global $post;
	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);
}
//excerpts 
function custom_excerpt_length() {
	return 25;
}
add_filter('excerpt_length', 'custom_excerpt_length');


//THEME SETUP
function learningWordPress_setup() {

	// REGISTER NAV MENUS WITH WORDPRESS
	register_nav_menus(array(
		'primary' => __( 'Primary Menu'),
		'footer' => __( 'Footer Menu')
		));


	//ADD featured image support
	add_theme_support('post-thumbnails');
	//add image sizes
	add_image_size('small-thumbnail', 180, 120, true); //w, height, hard crop
	//USING ARRAY to specify where to crop
	add_image_size('banner-img', 920, 210, array('left', 'center'));

	//ADD POST FORMAT SUPPORT
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));

	//ADD WIDGETS
	add_theme_support('widgets');

};


add_action('after_setup_theme', 'learningWordPress_setup');

//ADD WIDGET LOCATIONS
function ourWidgetsInit() {

	register_sidebar( array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="my-special-class">',
		'before_title' => '</h4>'
		));


	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer1'
		));


	register_sidebar( array(
		'name' => 'Footer Area 2',
		'id' => 'footer2'
		));

	register_sidebar( array(
		'name' => 'Footer Area 3',
		'id' => 'footer3'
		));

	register_sidebar( array(
		'name' => 'Footer Area 4',
		'id' => 'footer4'
		));


};

//ARG 1 - when, ARG2- function
add_action('widgets_init', 'ourWidgetsInit');

?>