<?php

//Disabled admin bar...use only for development
add_filter('show_admin_bar', '__return_false');


//Filter the stylesheet_uri to output the minified CSS file
function superAwesone_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'superAwesone_minified_css', 10, 2 );


//Stylesheets, scripts, and plugins/CDNs
function uni_files() {
    wp_enqueue_script('jquery');
    wp_enqueue_script( 'flickity', get_template_directory_uri() . '/build/js/flickity.pkgd.min.js', NULL, NULL, true );

    wp_enqueue_script( 'main', get_template_directory_uri() . '/build/js/main.min.js', array('jquery'), NULL, true );

    wp_enqueue_style('superAwesome_main_styles', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_style('font-awesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style('google-fonts-lato', "https://fonts.googleapis.com/css?family=Lato:300,300i&display=swap");
    wp_enqueue_style('google-fonts-yellowtail', "https://fonts.googleapis.com/css?family=Yellowtail&display=swap");

	
}

add_action('wp_enqueue_scripts', 'uni_files');

//Theme setup
function superAwesome_features() {
    add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('grid', 350, 500, true);
}

add_action('after_setup_theme', 'superAwesome_features');

//Initialize widget
function miranda_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Contact Form' ),
		'id'            => 'contact-form',
		'description'   => 'Copy the shortcode from Contact Form 7 and paste it here. Drag and drop the "Text" widget block here and paste the shortcode inside the text area.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html( 'About Me' ),
		'id'            => 'about-me',
		'description'   => 'Add your copy here for the section in About Me. Drag and drop the "Text" widget here to add your copy.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
		'name'          => esc_html( 'About Me - Read More' ),
		'id'            => 'about-me-read-more',
		'description'   => 'Add your copy here for the "Read More" section in About Me. Drag and drop the "Text" widget here to add your copy.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
		'name'          => esc_html( 'Footer' ),
		'id'            => 'footer',
		'description'   => 'Add your copy here for the footer section. Drag and drop the "Text" widget here to add your copy.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
		'name'          => esc_html( 'Featured' ),
		'id'            => 'featured',
		'description'   => 'Add your copy or image here for the featured section. Drag and drop the "Text" or "Image" widget here.',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'miranda_widgets_init' );

//Portfolio CPT
function cpt() {
    register_post_type('portfolio', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'labels' => array(
            'name' => 'Portfolio',
            'add_new_item' => 'Add New Portfolio Item',
            'edit_item' => 'Edit Portfolio Item',
            'all_items' => 'All Portfolio Items',
            'singular_name' => 'Portfolio'
        ),
        'menu_icon' => 'dashicons-portfolio'
    ));
}
    
    add_action('init', 'cpt');

?>