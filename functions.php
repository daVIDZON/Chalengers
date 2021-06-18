<?php
add_action('wp_enqueue_scripts','challengers_scripts');
add_filter( 'upload_mimes', 'svg_upload_allow' );

function challengers_scripts(){
   wp_enqueue_style('challengers-style', get_stylesheet_uri(  ));

};
add_theme_support('menus');

add_filter('nav_menu_linl_attributes',  'filter_nav_menu_link_attributes' , 10, 3  );
function filter_nav_menu_link_attributes($atts, $item, $args){
     if ($args->menu === "Main"){
		 $atts['class'] = 'header-menu-position';
	 };
     return $atts;
}

function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
?>