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

/**
 * 必要な定数を定義しておく
 */
define( 'PLUGIN_VERSION', '1.0' );
define( 'MY_CUSTOM_PLUGIN', __FILE__ );
define( 'MY_CUSTOM_PLUGIN_DIR', untrailingslashit( dirname( MY_CUSTOM_PLUGIN ) ) );

//define( 'PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
//define( 'PLUGIN_URL', plugins_url( '/', __FILE__ ) );

function add_custom_menu_page()
{
    add_menu_page('Meta By URL', 'Meta By URL', 'manage_options', 'meta-by-url', 'meta_by_url_portal', 'dashicons-admin-generic', 60);   
}
add_action('admin_menu', 'add_custom_menu_page');

function meta_by_url_portal(){
	new Meta_By_Url();
}

class Meta_By_Url {
    function __construct() {
        // フック
//        add_filter( 'template_include', array( $this, 'template_replacement' ), 10 );
		include $this->template_replacement();
    }

    // テンプレートの置き換え
    function template_replacement( $template_path = '' ) {
        // 管理画面の場合
        if( is_admin() ) {
            $theme_file = MY_CUSTOM_PLUGIN_DIR . '/templates/portal.php';
            $template_path = $theme_file;
        }

        // works詳細の場合
        // if ( is_singular( 'works' ) ) {
        //     $theme_file = MY_CUSTOM_PLUGIN_DIR . '/templates/single.php';
        //     $template_path = $theme_file;
        // }
        return $template_path;
    }
}





//ここまで







/**
 * スクリプト スタイルシートの読み込み
 */
function add_plugin_js_css()
{
	/* JS */
//	wp_enqueue_script('my-test-script', PLUGIN_URL.'assets/main.js', array(), PLUGIN_VERSION, true );
	/* CSS */
//	wp_enqueue_style( 'my-test-style', PLUGIN_URL.'assets/style.css', array(), PLUGIN_VERSION );
}
add_action( 'wp_enqueue_scripts', 'add_plugin_js_css');