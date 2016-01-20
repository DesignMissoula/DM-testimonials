<?php

/*
Plugin Name: DM Testimonials
Plugin URI: http://www.designmissoula.com/
Description: This is not just a plugin, it makes WordPress better.
Author: Bradford Knowlton
Version: 1.6
Author URI: http://bradknowlton.com/
*/

add_action( 'init', 'register_cpt_testimonial' );
function register_cpt_testimonial() {
	
	$labels = array( 
        'name' => _x( 'Testimonials', 'testimonial' ),
        'singular_name' => _x( 'Testimonial', 'testimonial' ),
        'add_new' => _x( 'Add New', 'testimonial' ),
        'add_new_item' => _x( 'Add New Testimonial', 'testimonial' ),
        'edit_item' => _x( 'Edit Testimonial', 'testimonial' ),
        'new_item' => _x( 'New Testimonial', 'testimonial' ),
        'view_item' => _x( 'View Testimonial', 'testimonial' ),
        'search_items' => _x( 'Search Testimonials', 'testimonial' ),
        'not_found' => _x( 'No testimonials found', 'testimonial' ),
        'not_found_in_trash' => _x( 'No testimonials found in Trash', 'testimonial' ),
        'parent_item_colon' => _x( 'Parent Testimonial:', 'testimonial' ),
        'menu_name' => _x( 'Testimonials', 'testimonial' ),
    );
    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        
        'supports' => array( 'title', 'editor' ), // , 'thumbnail', 'custom-fields' 
        // 'taxonomies' => array( 'medium' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        'menu_icon' => 'dashicons-book',
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'has_archive' => true,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => false,
        'capability_type' => 'post'
    );
    register_post_type( 'testimonial', $args );
	
		
}
