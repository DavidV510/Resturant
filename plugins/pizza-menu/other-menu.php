<?php 

 /*
        Plugin Name: Other Menu - Post Types
        Plugin URI: 
        Description: Adds a new Post Type into WordPress
        Version: 1.0
        Author: David
        Text Domain: gymfitness
    */

    if(!defined('ABSPATH')) die();


// Register new Custom Post Type
function other_menu() {
	$labels = array(
		'name'               => _x( 'Others', 'lapizzeria' ),
		'singular_name'      => _x( 'Other', 'post type singular name', 'lapizzeria' ),
		'menu_name'          => _x( 'Others', 'admin menu', 'lapizzeria' ),
		'name_admin_bar'     => _x( 'Others', 'add new on admin bar', 'lapizzeria' ),
		'add_new'            => _x( 'Add New', 'book', 'lapizzeria' ),
		'add_new_item'       => __( 'Add New Other', 'lapizzeria' ),
		'new_item'           => __( 'New Others', 'lapizzeria' ),
		'edit_item'          => __( 'Edit Others', 'lapizzeria' ),
		'view_item'          => __( 'View Others', 'lapizzeria' ),
		'all_items'          => __( 'All Others', 'lapizzeria' ),
		'search_items'       => __( 'Search Others', 'lapizzeria' ),
		'parent_item_colon'  => __( 'Parent Others:', 'lapizzeria' ),
		'not_found'          => __( 'No Others found.', 'lapizzeria' ),
		'not_found_in_trash' => __( 'No Others found in Trash.', 'lapizzeria' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'lapizzeria' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'menu' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'Other_menu', $args );
}

add_action( 'init', 'other_menu' );

?>