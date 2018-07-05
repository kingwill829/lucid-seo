<?php add_action( 'init', 'register_my_menus' );

$logo_path = get_template_directory_uri() . "/images/lucid-seo-logo.png";
define("LOGO", "$logo_path");

add_theme_support( 'title-tag' );
function register_my_menus() {
	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'secondary-menu' => __( 'Secondary Menu' ),
			'tertiary-menu' => __( 'Tertiary Menu' )
		));
}
?>
<?php
// Enqueue stylesheet
	function load_my_styles() {
		wp_enqueue_style( 'style', get_stylesheet_uri() );
	}
	add_action('wp_enqueue_scripts','load_my_styles');
?>
<?php
function register_jquery() {
    if (!is_admin() && $GLOBALS['pagenow'] != 'wp-login.php') {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', false, '1.11.2');
        wp_enqueue_script('jquery');
    }
}
// Enqueue Javascript
	function load_my_scripts() {
	wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
	wp_enqueue_script('scripts');
	}
	add_action( 'wp_enqueue_scripts', 'load_my_scripts' );  
	add_action( 'wp_enqueue_scripts', 'register_jquery' );

// control plugin loading
	function my_deregister_javascript() {
		if (!is_single() ) {
			wp_dequeue_script('zilla-likes');
			}
	}
	add_action('wp_print_scripts', 'my_deregister_javascript' );
// deregister disqus on non post pages
if ( !is_single() ) {
	remove_action('wp_footer', 'dsq_output_footer_comment_js'); 
}

add_theme_support( 'post-thumbnails' ); 

?>