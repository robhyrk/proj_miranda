<?php

//Disabled admin bar...use only for development
add_filter('show_admin_bar', '__return_false');


/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function superAwesone_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'superAwesone_minified_css', 10, 2 );

/**
 * Stylesheets and other things.
 */

function uni_files() {
    // wp_enqueue_script('main_uni_js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_script('jquery');
    // wp_enqueue_script('bootstrap-css', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js");

    // wp_enqueue_style('bootstrap-js', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
    wp_enqueue_style('superAwesome_main_styles', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_style('font-awesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css?family=Lato:400,400i,700&display=swap");

}

add_action('wp_enqueue_scripts', 'uni_files');

function superAwesome_features() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'superAwesome_features');
?>