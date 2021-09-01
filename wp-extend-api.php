<?php
/**
 * Plugin Name: WP Extend API
 * Plugin URI: https://github.com/mrrhak/wp-extend-api
 * Description: This plugin create for extend wp rest api.
 * Version: 1.0
 * Author: Mrr Hak
 * Author URI: http://www.mrrhak.com
 * License: GPL2+
 */

/**
 * Add `rand` as an option for orderby param in REST API.
 * Hook to `rest_{$this->post_type}_collection_params` filter.
 *
 * @param array $query_params Accepted parameters.
 * @return array
 */
function add_rand_orderby_rest_post_collection_params( $query_params ) {
	$query_params['orderby']['enum'][] = 'rand';
	return $query_params;
}

add_filter( 'rest_post_collection_params', 'add_rand_orderby_rest_post_collection_params' );

// register_activation_hook( __FILE__, 'wp_extend_api_plugin_activation' );
// function wp_extend_api_plugin_activation(){
// 	//YOUR CODE
// }

// register_deactivation_hook( __FILE__, 'wp_extend_api_plugin_deactivation' );
// function wp_extend_api_plugin_deactivation() {
// 	//YOUR CODE
// }

// register_uninstall_hook( __FILE__, 'wp_extend_api_plugin_uninstall' );
// function wp_extend_api_plugin_uninstall() {
// 	// Uninstallation stuff here
// }
