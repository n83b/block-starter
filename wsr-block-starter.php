<?php
/**
 * Plugin Name:     Wsr Block Starter
 * Description:     Starter block plugin for WSR
 * Author:          Nathan Barnes
 * Author URI:      https://websector.com.au
 * Version:         0.1.0
 *
 * @package         Wsr_Block_Starter
 */

defined( 'ABSPATH' ) || exit;

/*
    NOTE: Find and replace:  block-starter & block_starter
*/
// Your code starts here.

function wsr_enqueue_block_starter() {

    $asset_file = include( plugin_dir_path( __FILE__ ) . 'build/index.asset.php');
 
    wp_register_script(
        'wsr-block-starter-js',
        plugins_url( 'build/index.js', __FILE__ ),
        $asset_file['dependencies'],
        $asset_file['version']
    );

    wp_register_style(
        'wsr-block-starter-editor',
        plugins_url( 'css/editor.css', __FILE__ ),
        array( 'wp-edit-blocks' ),
        filemtime( plugin_dir_path( __FILE__ ) . 'css/editor.css' )
    );

    wp_register_style(
        'wsr-block-starter-css',
        plugins_url( 'css/style.css', __FILE__ ),
        array( ),
        filemtime( plugin_dir_path( __FILE__ ) . 'css/style.css' )
    );

    register_block_type( 'wsr/block-starter', array(
        'style' => 'wsr-block-starter-css',
        'editor_style' => 'wsr-block-starter-editor',
        'editor_script' => 'wsr-block-starter-js',
    ) );
}

add_action( 'init', 'wsr_enqueue_block_starter' );