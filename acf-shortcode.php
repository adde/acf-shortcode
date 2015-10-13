<?php
/*
Plugin Name: Advanced Custom Fields: Shortcode
Plugin URI;
Description: Adds support of shortcodes that can output data from ACF-fields.
Version: 1.0
Author: Andreas Jönsson
Author URI;
*/
add_shortcode( 'acfsc', function( $atts ){
	global $post;

	// Get field name and post id from shortcode
	if( ! isset( $atts['field'] ) ) return '';
	$field = $atts['field'];
	$post_id = ( ! isset( $atts['post'] ) ) ? $post->ID : $atts['post'];

	// Get field data
	$output = get_field( $field, $post_id );

	return $output;
} );