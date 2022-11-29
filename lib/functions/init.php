<?php
/*--------------------------------------------------------------------------
----------------------------- 初期設定の関数 -------------------------------
--------------------------------------------------------------------------*/
/* head内削除
* ---------------------------------------- */

//絵文字用のjavascriptとcssを削除
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

remove_action('wp_head', 'wp_generator'); //generator を削除
remove_action('wp_head', 'rsd_link'); //EditURI を削除
remove_action('wp_head', 'wlwmanifest_link'); //wlwmanifest を削除


/* セルフピンバック無効
* ---------------------------------------- */

function no_self_ping( &$links ) {
	$home = get_option( 'home' );
	foreach ( $links as $l => $link )
	if ( 0 === strpos( $link, $home ) )
	unset($links[$l]);
}
add_action( 'pre_ping', 'no_self_ping' );



/*--------------------------------------------------------------------------
------------------------ 不要なモノを削除する関数 --------------------------
--------------------------------------------------------------------------*/

/* カスタムメニューのliのクラスを削除
* ---------------------------------------- */

add_filter( 'nav_menu_css_class', 'my_custom_nav', 10, 2 );
function my_custom_nav( $classes, $item ) {

    // 	$classes を空にする前にカスタムクラスを変数へ入れておく		
    if( !empty( $classes[0] ) ){
        $custom_class = esc_attr( $classes[0] );
    }
    
    $classes = array();
    if( $item -> current == true ) {
        $classes[] = 'current';
    }
    // 先に変数に入れておいたカスタムクラス名を配列へ入れる
    if( !empty( $custom_class ) ){
	    $classes[] = $custom_class;
    }
    return $classes;
}


/*--------------------------------------------------------------------------
------------------------------- Gutenberg ----------------------------------
--------------------------------------------------------------------------*/


//デフォルトブロックのパターン削除
add_action('init', function() {
	remove_theme_support('core-block-patterns');
});