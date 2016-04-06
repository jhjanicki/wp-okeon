<?php

function theme_styles(){
	// wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css');
	//wp_enqueue_style('bootstrap_css','https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css');
	wp_enqueue_style('bootstrap_css','http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css');
	wp_enqueue_style('jquery_css','http://www.jqueryscript.net/css/jquerysctipttop.css');
	wp_enqueue_style('main_css', get_template_directory_uri().'/style.css');	
	wp_enqueue_style('menu_css', get_template_directory_uri().'/css/menu.css');	
	wp_enqueue_style('leaflet_css', get_template_directory_uri().'/js/libraries/leaflet/leaflet.css');	
	wp_enqueue_style('font_awesome_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
}

add_action('wp_enqueue_scripts','theme_styles');

function theme_js(){

	//wp_enqueue_script('bootstrap_js',get_template_directory_uri().'/js/libraries/bootstrap.min.js',array('jquery'),'',true);
	wp_enqueue_script('bootstrap_js','http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js',array('jquery'),'',true);
	wp_enqueue_script('d3_js','http://d3js.org/d3.v3.min.js',array('jquery'),'',true);
	wp_enqueue_script('d3_geo_js','http://d3js.org/d3.geo.projection.v0.min.js',array('jquery'),'',true);
	wp_enqueue_script('topojson_js',get_template_directory_uri().'/js/libraries/topojson-js/topojson.min.js',array('jquery','d3_js'),'',true);
	//wp_enqueue_script('leaflet_js',get_template_directory_uri().'/js/libraries/leaflet/leaflet.js','','',true);
	wp_enqueue_script('leaflet_js','http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js','','',true);
	wp_enqueue_script('map_js',get_template_directory_uri().'/js/map.js',array('jquery','d3_js','d3_geo_js','topojson_js','leaflet_js'),'',true);
	wp_enqueue_script('front_map_js',get_template_directory_uri().'/js/front-map.js',array('jquery','d3_js','d3_geo_js','topojson_js','leaflet_js'),'',true);
	wp_enqueue_script('menu_js',get_template_directory_uri().'/js/libraries/menu.js',array('jquery'),'',true);
	wp_enqueue_script('scroll_js',get_template_directory_uri().'/js/scroll.js',array('jquery'),'',true);
	wp_enqueue_script('carousel_js',get_template_directory_uri().'/js/carousel.js',array('jquery','bootstrap_js'),'',true);
}

add_action('wp_enqueue_scripts','theme_js');

add_filter('show_admin_bar','__return_false');


add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

function register_theme_menus(){
	register_nav_menus(
		array(
			'header-menu'  => __('Header Menu')
		)
	);
}

add_action('init','register_theme_menus');

function create_widget($name, $id, $description){ 
	register_sidebar(array(
		'name' => __($name),
		'id' => $id,
		'description' => __($description),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}


create_widget('Front Page Left', 'front-left', 'Displays on the left of the homepage');
create_widget('Front Page Center', 'front-center', 'Displays on the center of the homepage');
create_widget('Front Page Right', 'front-right', 'Displays on the right of the homepage');
create_widget('Front Page Icons', 'front-icons', 'Displays the icons of the homepage');
create_widget('Front Page Nav', 'front-nav', 'Displays on the nav of the homepage');
create_widget('Page Sidebar', 'page', 'Displays on the pages with a call to sidebar');
create_widget('Blog Sidebar', 'blog', 'Displays on the blog with a call to sidebar');
create_widget('Front Page Sidebar', 'front', 'Displays on the front page with a call to sidebar');

?>