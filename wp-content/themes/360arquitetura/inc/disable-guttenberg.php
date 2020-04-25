<?php
//  Disable Guttenberg on Pages to use only ACF
function disable_gutenberg($is_enabled, $post_type)
{

    if ($post_type === 'page') {
        return false;
    }

    return $is_enabled;

}

add_filter('use_block_editor_for_post_type', 'disable_gutenberg', 10, 2);