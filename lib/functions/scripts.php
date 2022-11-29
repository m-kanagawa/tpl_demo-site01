<?php
/*--------------------------------------------------------------------------
------------------------ CSSやJavascript関連の関数 -------------------------
--------------------------------------------------------------------------*/

/* StyleSheet
* ---------------------------------------- */

if( !is_admin() ){
	function register_style(){
		// wp_register_style( 'common-css', get_template_directory_uri().'/lib/css/common.css' );
		wp_register_style( 'style-css', get_template_directory_uri().'/lib/css/style.css' );
	}
		function add_style(){
		register_style();
		// wp_enqueue_style('common-css');
		wp_enqueue_style('style-css');
		if(is_home() || is_front_page()) {
		}
	}
	add_action('wp_enqueue_scripts', 'add_style',9);
}

/* JavaScript
* ---------------------------------------- */

if (!is_admin()) {
	function register_script(){
		wp_register_script('com-js',get_template_directory_uri().'/lib/js/common.js', false, '1.0', true);
		//自動住所入力を設置
		wp_register_script('ajaxzip3', 'https://ajaxzip3.github.io/ajaxzip3.js', false, '1.0', true);
		wp_register_script('main-js',get_template_directory_uri().'/lib/js/main.js', false, '1.0', true);
		wp_register_script('top-js',get_template_directory_uri().'/lib/js/top.js', false, '1.0', true);
	}
	function add_script() {
		register_script();
		wp_enqueue_script('jquery');
		if(is_page('contact')) {
			wp_enqueue_script('ajaxzip3');
		}
		wp_enqueue_script('com-js');
		wp_enqueue_script('main-js');
		if(is_home() || is_front_page()) {
			wp_enqueue_script('top-js');
		}
	}
	add_action('wp_enqueue_scripts', 'add_script');
}


//外部JSとCSSに勝手に入るバージョン表記を消す
function remove_cssjs_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );



/* StyleSheet 管理画面
* ---------------------------------------- */

/* ログイン画面のカスタム
* ---------------------------------------- */
//css、JSファイルの読み込み
function custom_login() {
	$files = '<link rel="stylesheet" href="'.get_template_directory_uri().'/lib/css/admin.css" />';
	echo $files;
}
add_action( 'login_enqueue_scripts', 'custom_login' );

/* 管理画面にCSS適用
* ---------------------------------------- */
function add_admin_style(){
  $path_css = get_template_directory_uri().'/lib/css/admin.css';
  wp_enqueue_style('admin_style', $path_css);
}
add_action('admin_enqueue_scripts', 'add_admin_style');

/* 管理者以外にCSS適用
* ---------------------------------------- */
// if (!current_user_can('administrator')) {
// 	function my_admin_style2(){
// 	    wp_enqueue_style( 'my_admin_style2', get_template_directory_uri().'/lib/css/user_editor.css' );
// 	}
// 	add_action( 'admin_enqueue_scripts', 'my_admin_style2' );
// }
