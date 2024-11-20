<?php
/**
*Plugin Name: Plugin Development Resource Hub
*Description: A plugin to store my plugin development resources
*Version: 1.0
*Text Domain: plugindev-resource-hub
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

function plugindev_custom_post_type() {
	register_post_type('plugindev_resource',
		array(
			'labels'      => array(
				'name'          => __('Resources', 'textdomain'),
				'singular_name' => __('Resource', 'textdomain'),
                'add_new'       => __('Add New Resource', 'textdomain'),
                'add_new_item'       => __('Add New Resource', 'textdomain'),
                'new_item'       => __('New Resource', 'textdomain'),
                'edit_item'       => __('Edit Resource', 'textdomain'),
                'view_item'       => __('View Resource', 'textdomain'),
                'all_items'       => __('All Resources', 'textdomain'),
			),
				'public'      => true,
				'has_archive' => true,
                'show_in_rest' => true,
                'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
                'rewrite'     => array( 'slug' => 'resources' ), // my custom slug

		)
	);
}
add_action('init', 'plugindev_custom_post_type');
