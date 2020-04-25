<?php

/**
 * ACF Change and Update Field
 * Update meta fields on acf field name change
 */
if (class_exists('acf')) {

    function update_acf_field_name($data, $postarr)
    {
        global $wpdb;
        $post_id = $postarr['ID'];
        $post_type = get_post_type($post_id);

        if ($post_type !== 'acf-field-group') {
            return $data;
        }

        $prev_fields = acf_get_fields($post_id);

        if (!$prev_fields) {
            return $data;
        }

        if (!array_key_exists('acf_fields', $postarr)) {
            return $data;
        }

        $next_fields = $postarr['acf_fields'];

        foreach ($prev_fields as $prev_field) {
            if (!array_key_exists($prev_field['ID'], $next_fields)) {
                continue;
            }

            $next_field = $next_fields[$prev_field['ID']];

            if ($next_field['name'] === $prev_field['name']) {
                continue;
            }

            // add additional checks here

            $res = $wpdb->update(
                "{$wpdb->prefix}postmeta",
                ['meta_key' => $next_field['name']],
                ['meta_key' => $prev_field['name']]
            );
        }

        return $data;
    }

    add_action('wp_insert_post_data', 'update_acf_field_name', 99, 3);
}