<?php
// Allowed Block Types per page type
function my_test_allowed_block_types( $allowed_block_types, $post ) {
	if ( 'page' === $post->post_type ) {

		$allowed_block_types = array(
			'core/block',
			'core/image',
			'core/paragraph',
			'core/heading',
			'core/list',
			'core/layout',
			'core/cover',
			'acf/hero',

		);

		return $allowed_block_types;
	}

}

add_filter( 'allowed_block_types', 'my_test_allowed_block_types', 10, 2 );
