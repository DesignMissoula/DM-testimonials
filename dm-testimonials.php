<?php

/*
Plugin Name: DM Testimonials
Plugin URI: http://www.designmissoula.com/
Description: This is not just a plugin, it makes WordPress better.
Author: Bradford Knowlton
Version: 1.6
Author URI: http://bradknowlton.com/
*/

add_action( 'init', 'register_cpt_Testimonial' );
function register_cpt_Testimonial() {
	
	$labels = array(
	'name' => _x( 'Testimonial Categories', 'Testimonial_categories' ),
	'singular_name' => _x( 'Testimonial Category', 'Testimonial_categories' ),
	'search_items' => _x( 'Search Testimonial Categories', 'Testimonial_categories' ),
	'popular_items' => _x( 'Popular Testimonial Categories', 'Testimonial_categories' ),
	'all_items' => _x( 'All Testimonial Categories', 'Testimonial_categories' ),
	'parent_item' => _x( 'Parent Testimonial Category', 'Testimonial_categories' ),
	'parent_item_colon' => _x( 'Parent Testimonial Category:', 'Testimonial_categories' ),
	'edit_item' => _x( 'Edit Testimonial Category', 'Testimonial_categories' ),
	'update_item' => _x( 'Update Testimonial Category', 'Testimonial_categories' ),
	'add_new_item' => _x( 'Add New Testimonial Category', 'Testimonial_categories' ),
	'new_item_name' => _x( 'New Testimonial Category', 'Testimonial_categories' ),
	'separate_items_with_commas' => _x( 'Separate Testimonial categories with commas', 'Testimonial_categories' ),
	'add_or_remove_items' => _x( 'Add or remove Testimonial categories', 'Testimonial_categories' ),
	'choose_from_most_used' => _x( 'Choose from the most used Testimonial categories', 'Testimonial_categories' ),
	'menu_name' => _x( 'Testimonial Categories', 'Testimonial_categories' ),
	);

    $args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'supports' => array( 'title', 'editor', 'excerpt', 'author',  ), // 'thumbnail', 'custom-fields', 'revisions'
    // 'taxonomies' => array( 'Testimonial_categories' ),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'publicly_queryable' => false,
    'exclude_from_search' => true,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => false,
    'rewrite' => false,
    'capability_type' => 'post'
    );
    register_post_type( 'Testimonial', $args );
	
		
}
