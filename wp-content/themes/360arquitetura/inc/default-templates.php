<?php

function default_post_block_template() {

	$post_type_object           = get_post_type_object( 'page' );
	$post_type_object->template = array(
		array( 'acf/hero' ),
	);
	// $post_type_object->template_lock = 'all';
}
add_action( 'init', 'default_post_block_template' );
