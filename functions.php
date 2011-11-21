<?php
	
	/**
	 * Includes the standard head elements (without the header)
	 */
	 function get_head() { // *giggle*
	     include 'head.php';
	 }
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !function_exists(core_mods) ) {
		function core_mods() {
			if ( !is_admin() ) {
			    
			    $templateDir = get_bloginfo('template_directory');
			    
				wp_deregister_script('jquery');
				wp_register_script('jquery', "http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js", false);
				wp_register_script('formalize', $templateDir . '/_/js/jquery.formalize.min.js', 'jquery');
				wp_enqueue_script('jquery');
				wp_enqueue_script('formalize');
            	
            	wp_register_style('main', get_bloginfo('stylesheet_url'));
            	wp_enqueue_style('main');
				
			}
		}
		core_mods();
	}

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.

?>