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
        return $template_path;
    }

	function portal_get_pages() {
		$args = array();

		echo("<br>Get all pages:<br>");
		$pages = get_pages( $args );
		if ( $pages ) {
			global $page;
			foreach($pages as $page){ // $pages is array of object
				echo "ID:".$page->ID."URL:".$page->guid."post_title:".$page->post_title."post_type:".$page->post_type."<br>";
				// $page_template = get_post_meta($page->ID, '_wp_page_template', true); // Page template stored in "_wp_page_template"
				// echo $page_template;
			}
		}

		echo("<br>Get all posts:<br>");
		$posts = get_posts( $args );
		if ( $posts ) {
			global $post;
			foreach( $posts as $post ) {
				echo "ID:".$post->ID."URL:".$post->guid."post_title:".$post->post_title."post_type:".$post->post_type."<br>";

				// setup_postdata( $post );
				// the_title();
			}
			// wp_reset_postdata();
		}
	}



	// function portal_get_pages($post_type = 'page') {// $pages, $pagenum = 1, $per_page = 20

	// 	echo "post_type: ".$post_type."<br>";
	// 	$args = array(
	// 		'sort_order' => 'ASC',
	// 		'sort_column' => 'post_title',
	// 		'hierarchical' => 1,
	// 		'exclude' => '',
	// 		'include' => '',
	// 		'meta_key' => '',
	// 		'meta_value' => '',
	// 		'authors' => '',
	// 		'child_of' => 0,
	// 		'parent' => -1,
	// 		'exclude_tree' => '',
	// 		'number' => '',
	// 		'offset' => 0,
	// 		'post_type' => $post_type,//page|post
	// 		'post_status' => 'publish'
	// 	); 
	// 	$pages = get_pages( $args );  // get all pages based on supplied args
		
	// 	foreach($pages as $page){ // $pages is array of object
	// 		echo "ID:".$page->ID."URL:".$page->guid."post_title:".$page->post_title."post_type:".$page->post_type."<br>";
	// 	//    $page_template = get_post_meta($page->ID, '_wp_page_template', true); // Page template stored in "_wp_page_template"
	// 	//    echo $page_template;
	// 	}
	// }

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