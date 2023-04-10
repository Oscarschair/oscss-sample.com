<?php
/*
Plugin Name: Meta By URL
Description: URLごとにMetaデータを登録するプラグイン
Version: 1.0
Plugin URI: ---
Author: Hirofumi Kuruma
Author URI: https://oscarchair.jp/
License: ---
Text Domain: meta-by-url
Domain Path: /languages
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function add_custom_menu_page()
{
    add_menu_page('Meta By URL', 'Meta By URL', 'manage_options', 'meta-by-url', 'meta-by-url-setting', 'dashicons-admin-generic', 60);
}
add_action('admin_menu', 'add_custom_menu_page');

/**
 * 必要な定数を定義しておく
 */
define( 'PLUGIN_VERSION', '1.0' );
define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_URL', plugins_url( '/', __FILE__ ) );

/**
 * スクリプト スタイルシートの読み込み
 */
function add_plugin_js_css()
{
	/* JS */
	wp_enqueue_script('my-test-script', PLUGIN_URL.'assets/my_script.js', array(), PLUGIN_VERSION, true );

	/* CSS */
	wp_enqueue_style( 'my-test-style', PLUGIN_URL.'assets/my_style.css', array(), PLUGIN_VERSION );
}
add_action( 'wp_enqueue_scripts', 'add_plugin_js_css');