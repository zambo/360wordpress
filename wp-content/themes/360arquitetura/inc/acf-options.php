<?php
/**
 * Display Client Logos
 */

 add_action('acf/init', 'clients_acf_op_init');
function clients_acf_op_init()
{
    // Check function exists.
    if (function_exists('acf_add_options_page') ) {

        // Register options page.
        $second_page = acf_add_options_page(
            array(
            'page_title'      => __('Clientes'),
            'menu_title'      => __('Clientes'),
            'menu_slug'       => 'our_clients',
            'icon_url'        => 'dashicons-groups',
            'capability'      => 'edit_posts',
            'position'        => 40,
            'redirect'        => false,
            'show_in_graphql' => true,
            )
        );
    }
}


add_action('acf/init', 'form_acf_op_init');
function form_acf_op_init()
{

    // Check function exists.
    if (function_exists('acf_add_options_sub_page') ) {
        // Add sub page.
        $child = acf_add_options_sub_page(
            array(
            'page_title'  => __('Formulários'),
            'menu_title'  => __('Formulários'),
			'parent_slug' => 'edit.php?post_type=portfolio',
			'show_in_graphql' => true,
            )
        );
    }
}
