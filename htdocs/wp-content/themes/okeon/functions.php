<?php

function theme_styles(){
	// wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css');
	//wp_enqueue_style('bootstrap_css','https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css');
	wp_enqueue_style('bootstrap_css','http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css');
	wp_enqueue_style('jquery_css','http://www.jqueryscript.net/css/jquerysctipttop.css');
	wp_enqueue_style('main_css', get_template_directory_uri().'/style.css');	
	wp_enqueue_style('menu_css', get_template_directory_uri().'/css/menu.css');	
	// wp_enqueue_style('leaflet_css', get_template_directory_uri().'/js/libraries/leaflet/leaflet.css');
	wp_enqueue_style('cartodb_css', 'http://libs.cartocdn.com/cartodb.js/v3/3.15/themes/css/cartodb.css');	
	wp_enqueue_style('font_awesome_css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
	wp_enqueue_style('Roboto_css', 'https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic');
	wp_enqueue_style('Open_Sans_css', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic');
	wp_enqueue_style('Raleway_css', 'https://fonts.googleapis.com/css?family=Raleway:400,900italic,900,800italic,800,700italic,700,600italic,600,500italic,500,400italic,300italic,300,200italic,200,100,100italic');
	wp_enqueue_style('Tillium_css','https://fonts.googleapis.com/css?family=Titillium+Web:400,900,700,700italic,600italic,400italic,600,300italic,300,200italic,200');
	wp_enqueue_style('Lato_lora_css','https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic|Lora:400,400italic,700,700italic');
}

add_action('wp_enqueue_scripts','theme_styles');

function theme_js(){

	//wp_enqueue_script('bootstrap_js',get_template_directory_uri().'/js/libraries/bootstrap.min.js',array('jquery'),'',true);
	wp_enqueue_script('bootstrap_js','http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js',array('jquery'),'',true);
	wp_enqueue_script('d3_js','http://d3js.org/d3.v3.min.js',array('jquery'),'',true);
	wp_enqueue_script('d3_geo_js','http://d3js.org/d3.geo.projection.v0.min.js',array('jquery'),'',true);
	wp_enqueue_script('queue_js','http://d3js.org/queue.v1.min.js',array('jquery'),'',true);
	wp_enqueue_script('topojson_js',get_template_directory_uri().'/js/libraries/topojson-js/topojson.min.js',array('jquery','d3_js'),'',true);
	//wp_enqueue_script('leaflet_js',get_template_directory_uri().'/js/libraries/leaflet/leaflet.js','','',true);
	// wp_enqueue_script('leaflet_js','http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js','','',true);
	wp_enqueue_script('cartodb_js','http://libs.cartocdn.com/cartodb.js/v3/3.15/cartodb.js','','',true);
	wp_enqueue_script('map_js',get_template_directory_uri().'/js/map-new.js',array('jquery','d3_js','d3_geo_js','topojson_js','cartodb_js'),'',true);
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