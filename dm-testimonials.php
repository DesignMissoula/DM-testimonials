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
	'name' => _x( 'TestImonial Categories', 'testimonial_categories' ),
	'singular_name' => _x( 'TestImonial Category', 'testimonial_categories' ),
	'search_items' => _x( 'Search TestImonial Categories', 'testimonial_categories' ),
	'popular_items' => _x( 'Popular TestImonial Categories', 'testimonial_categories' ),
	'all_items' => _x( 'All TestImonial Categories', 'testimonial_categories' ),
	'parent_item' => _x( 'Parent TestImonial Category', 'testimonial_categories' ),
	'parent_item_colon' => _x( 'Parent TestImonial Category:', 'testimonial_categories' ),
	'edit_item' => _x( 'Edit TestImonial Category', 'testimonial_categories' ),
	'update_item' => _x( 'Update TestImonial Category', 'testimonial_categories' ),
	'add_new_item' => _x( 'Add New TestImonial Category', 'testimonial_categories' ),
	'new_item_name' => _x( 'New TestImonial Category', 'testimonial_categories' ),
	'separate_items_with_commas' => _x( 'Separate testimonial categories with commas', 'testimonial_categories' ),
	'add_or_remove_items' => _x( 'Add or remove testimonial categories', 'testimonial_categories' ),
	'choose_from_most_used' => _x( 'Choose from the most used testimonial categories', 'testimonial_categories' ),
	'menu_name' => _x( 'TestImonial Categories', 'testimonial_categories' ),
	);

    $args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'supports' => array( 'title', 'editor', 'excerpt', 'author',  ), // 'thumbnail', 'custom-fields', 'revisions'
    // 'taxonomies' => array( 'testimonial_categories' ),
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
    register_post_type( 'testimonial', $args );
	
		
}
