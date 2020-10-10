<?php	

/*	
Plugin Name: Administration Portfolios
Plugin URI: 
Description: This plugin will allow you to manage your portfolios
Version: 1.0	
Author: Guiselle Mejia	
Author URI: https://github.com/guissmejia	
License: GNU General Public Licence v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/	

 // Register Custom Post Type
 function create_custom_post_type_portfolio() {
  
  $labels = array(
  'name' => _x('Portfolio', 'Post Type General Name', 'create_custom_post_type_portfolio'),
  'singular_name' => _x( 'Portfolio', 'Post Type Singular Name', 'create_custom_post_type_portfolio' ),
  'menu_name' => __('Portfolio', 'create_custom_post_type_portfolio' ),
  'name_admin_bar' => __('Portfolio', 'create_custom_post_type_portfolio'),
  'archives' => __('Item Archives', 'create_custom_post_type_portfolio'),
  'parent_item_colon' => __('Portfolio', 'create_custom_post_type_portfolio'),
  'all_items' => __('All posts', 'create_custom_post_type_portfolio'),
  'add_new_item' => __('Add New Custom Post', 'create_custom_post_type_portfolio'),
  'add_new' => __('Add New Custom Post', 'create_custom_post_type_portfolio' ),
  'new_item' => __('New Custom Post', 'create_custom_post_type_portfolio' ),
  'edit_item' => __('Edit Custom Post', 'create_custom_post_type_portfolio' ),
  'update_item' => __('Update Custom Post', 'create_custom_post_type_portfolio'),
  'view_item' => __('View Custom Post', 'create_custom_post_type_portfolio' ),
  'search_items' => __('Search Custom Post', 'create_custom_post_type_portfolio'),
  'not_found' => __('Not found', 'create_custom_post_type_portfolio'),
  'not_found_in_trash' => __('Not found in Trash', 'create_custom_post_type_portfolio'),
  'featured_image' => __('Featured Image', 'create_custom_post_type_portfolio'),
  'set_featured_image' => __('Set featured image', 'create_custom_post_type_portfolio'),
  'remove_featured_image' => __('Remove featured image', 'create_custom_post_type_portfolio'),
  'use_featured_image' => __('Use as featured image', 'create_custom_post_type_portfolio'),
  'insert_into_item' => __('Insert into item', 'create_custom_post_type_portfolio'),
  'uploaded_to_this_item' => __('Uploaded to this item', 'create_custom_post_type_portfolio'),
  'items_list' => __('Items list', 'create_custom_post_type_portfolio' ),
  'items_list_navigation' => __('Items list navigation', 'create_custom_post_type_portfolio'),
  'filter_items_list' => __('Filter items list', 'create_custom_post_type_portfolio'),
  );
  $args = array(
  'label' => __('Portfolio', 'create_custom_post_type_portfolio' ),
  'description' => __('Descripn del CPT', 'create_custom_post_type_portfolio' ),
  'labels' => $labels,
  'supports' => array( 'title', 'editor', 'thumbnail', 'revisions', 'comments'),
  'taxonomies' => array('category','post_tag' ),
  'hierarchical' => false,
  'public' => true,
  'show_ui' => true,
  'show_in_menu' => true,
  'show_in_rest' => true,
  'menu_position' => 4,
  'menu_icon' => 'dashicons-text-page',
  'show_in_admin_bar' => true,
  'show_in_nav_menus' => true,
  'can_export' => true,
  'has_archive' => true,
  'exclude_from_search' => false,
  'publicly_queryable' => true,
  'capability_type' => 'page',
  );
  
    register_post_type('portfolio', $args );
  }
  add_action( 'init', 'create_custom_post_type_portfolio', 0 );