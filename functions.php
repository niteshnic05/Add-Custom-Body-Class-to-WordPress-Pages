<?php
/**
---existing codes.......
 */
/* add custom body class in page */
function add_custom_body_class_meta_box() {
    add_meta_box(
        'custom_body_class_meta_box',        // Unique ID
        'Custom Body Class',                 // Box title
        'custom_body_class_meta_box_html',   // Content callback, must be of type callable
        'page',                              // Post type
        'side',                              // Context (normal, advanced, side)
        'default'                            // Priority (default, high, low)
    );
}
add_action('add_meta_boxes', 'add_custom_body_class_meta_box');

function custom_body_class_meta_box_html($post) {
    $value = get_post_meta($post->ID, '_custom_body_class', true);
    ?>
    <label for="custom_body_class_field">Body Class</label>
    <input type="text" name="custom_body_class_field" id="custom_body_class_field" value="<?php echo esc_attr($value); ?>" size="25" />
    <?php
}

function save_custom_body_class_meta_box_data($post_id) {
    if (array_key_exists('custom_body_class_field', $_POST)) {
        update_post_meta(
            $post_id,
            '_custom_body_class',
            sanitize_text_field($_POST['custom_body_class_field'])
        );
    }
}
add_action('save_post', 'save_custom_body_class_meta_box_data');

function add_custom_body_class($classes) {
    if (is_page()) {
        global $post;
        $custom_class = get_post_meta($post->ID, '_custom_body_class', true);
        if ($custom_class) {
            $classes[] = $custom_class;
        }
    }

    return $classes;
}
add_filter('body_class', 'add_custom_body_class');


/* END add custom body class in page */