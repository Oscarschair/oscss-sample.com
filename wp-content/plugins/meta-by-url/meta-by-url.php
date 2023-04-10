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
    add_menu_page('Meta By URL', 'Meta By URL', 'manage_options', 'meta-by-url', 'meta-by-url-setting', 'dashicons-admin-generic', 30);
}
add_action('admin_menu', 'add_custom_menu_page');
