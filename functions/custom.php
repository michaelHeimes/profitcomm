<?php

// Disable Gutenberg

if (version_compare($GLOBALS['wp_version'], '5.0-beta', '>')) {
	
	// WP > 5 beta
	add_filter('use_block_editor_for_post_type', '__return_false', 10);
	
} else {
	
	// WP < 5 beta
	add_filter('gutenberg_can_edit_post_type', '__return_false', 10);
	
}

// ACF Options
add_action( 'after_setup_theme', 'joints_theme_support' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

if( function_exists('acf_set_options_page_title') ) {
    acf_set_options_page_title( __('Theme Options') );
}

// Add Page Theme to Body classes
function add_acf_body_class($class) {
	
	if ( get_field('page_theme', $post->ID) ) {
    	$value = get_field('page_theme', $post->ID);
    }
    $class[] = $value['value'];
    return $class;
}
add_filter('body_class', 'add_acf_body_class');


// Add Site Theme tax slug to body class
function add_taxonomy_to_single( $classes ) {
        global $post;
        $my_terms = get_the_terms( $post->ID, 'site_theme' );
        if ( $my_terms && ! is_wp_error( $my_terms ) ) {
            $classes[] = $my_terms[0]->slug;
        }
        return $classes;
}
add_filter( 'body_class', 'add_taxonomy_to_single' );


// Callback function to insert 'styleselect' into the $buttons array
function add_style_select_buttons( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}

// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'add_style_select_buttons' );


//add custom styles to the WordPress editor
function my_custom_styles( $init_array ) {  

    $style_formats = array(  
        // These are the custom styles 
        array(  
            'title' => 'Large Copy',  
            'block' => 'span',  
            'classes' => 'large-copy',
            'wrapper' => true,
        ),
        array(  
            'title' => 'Button Link',  
            'block' => 'span',  
            'classes' => 'button',
            'wrapper' => true,
        ),
        array(  
            'title' => 'Side-by-Side Images',  
            'block' => 'div',  
            'classes' => 'sbs-img',
            'wrapper' => true,
        ),
    );  
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );  
    
    return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_custom_styles' );