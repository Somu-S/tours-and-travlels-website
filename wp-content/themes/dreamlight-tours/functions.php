<?php 


function dreamlight_enqueue_scripts(){
	wp_enqueue_style('style-css',get_template_directory_uri().'/asset/style.css');
	wp_enqueue_script('index-js',get_template_directory_uri().'/asset/index.js',array(),'1.0.0',false);
	wp_enqueue_script('fontawesome-js','//kit.fontawesome.com/9cfa251def.js');
	wp_enqueue_style('style-main-css',get_stylesheet_directory_uri());
}

add_theme_support('post-thumbnails');
add_action('wp_enqueue_scripts','dreamlight_enqueue_scripts');

// acf register option pages

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Dreamlight Settings',
		'menu_title'	=> 'Dreamlight Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Homepage Settings',
		'menu_title'	=> 'Homepage',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'About Page Settings',
		'menu_title'	=> 'About Page',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Contact Page Settings',
		'menu_title'	=> 'Contact Page',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Services Page Settings',
		'menu_title'	=> 'Services Page',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Destination Page Settings',
		'menu_title'	=> 'Destination Page',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Tours Page Settings',
		'menu_title'	=> 'Tours Package Page',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Tour Details Page Settings',
		'menu_title'	=> 'Tour Details Page',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}


//register slider post types

function dreamlight_create_tour_destination_post_type() {
   
    $labels = array(
        'name'          => 'Destinations',
        'singular_name' => 'Destination',
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => 'Add New destination',
        'new_item' => __('New destination'),
        'edit_item' => __('Edit destination'),
        'view_item' => __('View destination'),
        'all_items' => __('All destination'),
        'search_items' => __('Search destination'),
        'not_found' => __('No destination found.')   
    );

   
    $supports = array(
        'title',        
        'excerpt',      // Allows short description
        'thumbnail'
    );

    /*
     * The $args parameter holds important parameters for the custom post type
     */
    $args = array(
        'labels'              => $labels,
        'description'         => 'Post type post destination',
        'supports'            => $supports,
        'taxonomies'          => array('category'),
        'hierarchical'        => false,
        'public'              => true,  
        'show_ui'             => true,  
        'show_in_menu'        => true,  
        'show_in_nav_menus'   => true,  
        'show_in_admin_bar'   => true, 
        'menu_position'       => 5,     
        'menu_icon'           => 'dashicons-upload',  
        'can_export'          => true,  
        'capability_type'     => 'post' 
    );

    register_post_type('destination', $args); 

    $labels = array(
        'name'          => 'Tour Packages',
        'singular_name' => 'Tour Package',
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => 'Add New package',
        'new_item' => __('New package'),
        'edit_item' => __('Edit package'),
        'view_item' => __('View package'),
        'all_items' => __('All packages'),
        'search_items' => __('Search package'),
        'not_found' => __('No package found.')   
    );

   
    $supports = array(
        'title',
        'editor',        
        'excerpt',      // Allows short description
        'thumbnail'
    );

    /*
     * The $args parameter holds important parameters for the custom post type
     */
    $args = array(
        'labels'              => $labels,
        'description'         => 'Post type post tours package',
        'supports'            => $supports,
        'taxonomies'          => array('category'),
        'hierarchical'        => false,
        'public'              => true,  
        'show_ui'             => true,  
        'show_in_menu'        => true,  
        'show_in_nav_menus'   => true,  
        'show_in_admin_bar'   => true, 
        'menu_position'       => 5,     
        'menu_icon'           => 'dashicons-upload',  
        'can_export'          => true,  
        'capability_type'     => 'post' 
    );

    register_post_type('package', $args); 


}
add_action('init', 'dreamlight_create_tour_destination_post_type');

 ?>