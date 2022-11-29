<?php
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {
	if( function_exists('acf_register_block_type') ) {
		acf_register_block_type(array(
			'name'              => 'acf parts',
			'title'             => __('パーツを追加'),
			'description'       => __('パーツを追加のカスタムブロックです。'),
			'render_template'   => 'lib/acf/blocks/acf-parts.php',
			'category'          => 'formatting',
			'icon'              => 'wordpress',
			'keywords'          => array( 'acf', 'parts' ),
			'mode' => 'auto',
		));
	}
}
