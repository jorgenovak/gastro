<?php

/*
Plugin Name: Footer links
Version: 1.0
Author URI:
Plugin URI:
Description: Plugin para agregar campos personalizados del Footer.
Author: Jorge Arreola
*/

// Add the Meta Box 1 -------------------------------------
function add_custom_footer_meta_box_1() {
    add_meta_box(
        'custom_footer_meta_box_1', // $id
        '1 - Link', // $title
        'show_custom_footer_meta_box_1', // $callback
        'Footer', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_custom_footer_meta_box_1');

// Fields Array -------------------------------------------
$prefix = 'footer_';
$custom_footer_meta_fields_1 = array(
    array(
        'label'=> 'Titulo',
        'desc'  => 'Titulo.',
        'id'    => $prefix.'text_titulo_1',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Url',
        'desc'  => 'ej: https://pagina.com.mx',
        'id'    => $prefix.'text_desc_1',
        'type'  => 'text'
    )
);

// The Callback -----------------------------------------
function show_custom_footer_meta_box_1() {
global $custom_footer_meta_fields_1, $post;

// Use nonce for verification ----------------------------
echo '<input type="hidden" name="custom_footer_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
    foreach ($custom_footer_meta_fields_1 as $field) {
        // get value of this field if it exists for this post
        $meta = get_post_meta($post->ID, $field['id'], true);
        // begin a table row with
        echo '<div class="input-area" style="display: inline-block; margin-left: 40px;">
									<label for="'.$field['id'].'" style="font-weight: bolder; margin-right: 10px;">'.$field['label'].'</label>';
                switch($field['type']) {
                    // case items will go here
										case 'text':
									    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30"/>';
										break;
                } //end switch
        echo '</div>';
    }
}

// Save the Data ---------------------------------------
function save_custom_footer_meta_1($post_id) {
    global $custom_footer_meta_fields_1;

    // verify nonce
    if (!wp_verify_nonce($_POST['custom_footer_meta_box_nonce'], basename(__FILE__)))
        return $post_id;
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }

    // loop through fields and save the data
    foreach ($custom_footer_meta_fields_1 as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_custom_footer_meta_1');


//
//
//
//
//
//



// Add the Meta Box 1 -------------------------------------
function add_custom_footer_meta_box_2() {
    add_meta_box(
        'custom_footer_meta_box_2', // $id
        '2 - Link', // $title
        'show_custom_footer_meta_box_2', // $callback
        'Footer', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_custom_footer_meta_box_2');

// Fields Array -------------------------------------------
$prefix = 'footer_';
$custom_footer_meta_fields_2 = array(
    array(
        'label'=> 'Titulo',
        'desc'  => 'Titulo.',
        'id'    => $prefix.'text_titulo_2',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Url',
        'desc'  => 'ej: https://pagina.com.mx',
        'id'    => $prefix.'text_desc_2',
        'type'  => 'text'
    )
);

// The Callback -----------------------------------------
function show_custom_footer_meta_box_2() {
global $custom_footer_meta_fields_2, $post;

// Use nonce for verification ----------------------------
echo '<input type="hidden" name="custom_footer_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
    foreach ($custom_footer_meta_fields_2 as $field) {
        // get value of this field if it exists for this post
        $meta = get_post_meta($post->ID, $field['id'], true);
        // begin a table row with
        echo '<div class="input-area" style="display: inline-block; margin-left: 40px;">
									<label for="'.$field['id'].'" style="font-weight: bolder; margin-right: 10px;">'.$field['label'].'</label>';
                switch($field['type']) {
                    // case items will go here
										case 'text':
									    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30"/>';
										break;
                } //end switch
        echo '</div>';
    }
}

// Save the Data ---------------------------------------
function save_custom_footer_meta_2($post_id) {
    global $custom_footer_meta_fields_2;

    // verify nonce
    if (!wp_verify_nonce($_POST['custom_footer_meta_box_nonce'], basename(__FILE__)))
        return $post_id;
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }

    // loop through fields and save the data
    foreach ($custom_footer_meta_fields_2 as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_custom_footer_meta_2');


//
//
//
//
//
//



// Add the Meta Box 3 -------------------------------------
function add_custom_footer_meta_box_3() {
    add_meta_box(
        'custom_footer_meta_box_3', // $id
        '3 - Link', // $title
        'show_custom_footer_meta_box_3', // $callback
        'Footer', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_custom_footer_meta_box_3');

// Fields Array -------------------------------------------
$prefix = 'footer_';
$custom_footer_meta_fields_3 = array(
    array(
        'label'=> 'Titulo',
        'desc'  => 'Titulo.',
        'id'    => $prefix.'text_titulo_3',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Url',
        'desc'  => 'ej: https://pagina.com.mx',
        'id'    => $prefix.'text_desc_3',
        'type'  => 'text'
    )
);

// The Callback -----------------------------------------
function show_custom_footer_meta_box_3() {
global $custom_footer_meta_fields_3, $post;

// Use nonce for verification ----------------------------
echo '<input type="hidden" name="custom_footer_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
    foreach ($custom_footer_meta_fields_3 as $field) {
        // get value of this field if it exists for this post
        $meta = get_post_meta($post->ID, $field['id'], true);
        // begin a table row with
        echo '<div class="input-area" style="display: inline-block; margin-left: 40px;">
									<label for="'.$field['id'].'" style="font-weight: bolder; margin-right: 10px;">'.$field['label'].'</label>';
                switch($field['type']) {
                    // case items will go here
										case 'text':
									    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30"/>';
										break;
                } //end switch
        echo '</div>';
    }
}

// Save the Data ---------------------------------------
function save_custom_footer_meta_3($post_id) {
    global $custom_footer_meta_fields_3;

    // verify nonce
    if (!wp_verify_nonce($_POST['custom_footer_meta_box_nonce'], basename(__FILE__)))
        return $post_id;
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }

    // loop through fields and save the data
    foreach ($custom_footer_meta_fields_3 as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_custom_footer_meta_3');


//
//
//
//
//
//



// Add the Meta Box 4 -------------------------------------
function add_custom_footer_meta_box_4() {
    add_meta_box(
        'custom_footer_meta_box_4', // $id
        '4 - Link', // $title
        'show_custom_footer_meta_box_4', // $callback
        'Footer', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_custom_footer_meta_box_4');

// Fields Array -------------------------------------------
$prefix = 'footer_';
$custom_footer_meta_fields_4 = array(
    array(
        'label'=> 'Titulo',
        'desc'  => 'Titulo.',
        'id'    => $prefix.'text_titulo_4',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Url',
        'desc'  => 'ej: https://pagina.com.mx',
        'id'    => $prefix.'text_desc_4',
        'type'  => 'text'
    )
);

// The Callback -----------------------------------------
function show_custom_footer_meta_box_4() {
global $custom_footer_meta_fields_4, $post;

// Use nonce for verification ----------------------------
echo '<input type="hidden" name="custom_footer_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
    foreach ($custom_footer_meta_fields_4 as $field) {
        // get value of this field if it exists for this post
        $meta = get_post_meta($post->ID, $field['id'], true);
        // begin a table row with
        echo '<div class="input-area" style="display: inline-block; margin-left: 40px;">
									<label for="'.$field['id'].'" style="font-weight: bolder; margin-right: 10px;">'.$field['label'].'</label>';
                switch($field['type']) {
                    // case items will go here
										case 'text':
									    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30"/>';
										break;
                } //end switch
        echo '</div>';
    }
}

// Save the Data ---------------------------------------
function save_custom_footer_meta_4($post_id) {
    global $custom_footer_meta_fields_4;

    // verify nonce
    if (!wp_verify_nonce($_POST['custom_footer_meta_box_nonce'], basename(__FILE__)))
        return $post_id;
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }

    // loop through fields and save the data
    foreach ($custom_footer_meta_fields_4 as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_custom_footer_meta_4');




//
//
//
//
//
//



// Add the Meta Box 5 -------------------------------------
function add_custom_footer_meta_box_5() {
    add_meta_box(
        'custom_footer_meta_box_5', // $id
        '5 - Link', // $title
        'show_custom_footer_meta_box_5', // $callback
        'Footer', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_custom_footer_meta_box_5');

// Fields Array -------------------------------------------
$prefix = 'footer_';
$custom_footer_meta_fields_5 = array(
    array(
        'label'=> 'Titulo',
        'desc'  => 'Titulo.',
        'id'    => $prefix.'text_titulo_5',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Url',
        'desc'  => 'ej: https://pagina.com.mx',
        'id'    => $prefix.'text_desc_5',
        'type'  => 'text'
    )
);

// The Callback -----------------------------------------
function show_custom_footer_meta_box_5() {
global $custom_footer_meta_fields_5, $post;

// Use nonce for verification ----------------------------
echo '<input type="hidden" name="custom_footer_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
    foreach ($custom_footer_meta_fields_5 as $field) {
        // get value of this field if it exists for this post
        $meta = get_post_meta($post->ID, $field['id'], true);
        // begin a table row with
        echo '<div class="input-area" style="display: inline-block; margin-left: 40px;">
									<label for="'.$field['id'].'" style="font-weight: bolder; margin-right: 10px;">'.$field['label'].'</label>';
                switch($field['type']) {
                    // case items will go here
										case 'text':
									    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30"/>';
										break;
                } //end switch
        echo '</div>';
    }
}

// Save the Data ---------------------------------------
function save_custom_footer_meta_5($post_id) {
    global $custom_footer_meta_fields_5;

    // verify nonce
    if (!wp_verify_nonce($_POST['custom_footer_meta_box_nonce'], basename(__FILE__)))
        return $post_id;
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }

    // loop through fields and save the data
    foreach ($custom_footer_meta_fields_5 as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_custom_footer_meta_5');







//
//
//
//
//
//



// Add the Meta Box 6 -------------------------------------
function add_custom_footer_meta_box_6() {
    add_meta_box(
        'custom_footer_meta_box_6', // $id
        '6 - Link', // $title
        'show_custom_footer_meta_box_6', // $callback
        'Footer', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_custom_footer_meta_box_6');

// Fields Array -------------------------------------------
$prefix = 'footer_';
$custom_footer_meta_fields_6 = array(
    array(
        'label'=> 'Titulo',
        'desc'  => 'Titulo.',
        'id'    => $prefix.'text_titulo_6',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Url',
        'desc'  => 'ej: https://pagina.com.mx',
        'id'    => $prefix.'text_desc_6',
        'type'  => 'text'
    )
);

// The Callback -----------------------------------------
function show_custom_footer_meta_box_6() {
global $custom_footer_meta_fields_6, $post;

// Use nonce for verification ----------------------------
echo '<input type="hidden" name="custom_footer_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
    foreach ($custom_footer_meta_fields_6 as $field) {
        // get value of this field if it exists for this post
        $meta = get_post_meta($post->ID, $field['id'], true);
        // begin a table row with
        echo '<div class="input-area" style="display: inline-block; margin-left: 40px;">
									<label for="'.$field['id'].'" style="font-weight: bolder; margin-right: 10px;">'.$field['label'].'</label>';
                switch($field['type']) {
                    // case items will go here
										case 'text':
									    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30"/>';
										break;
                } //end switch
        echo '</div>';
    }
}

// Save the Data ---------------------------------------
function save_custom_footer_meta_6($post_id) {
    global $custom_footer_meta_fields_6;

    // verify nonce
    if (!wp_verify_nonce($_POST['custom_footer_meta_box_nonce'], basename(__FILE__)))
        return $post_id;
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }

    // loop through fields and save the data
    foreach ($custom_footer_meta_fields_6 as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_custom_footer_meta_6');







//
//
//
//
//
//



// Add the Meta Box 7 -------------------------------------
function add_custom_footer_meta_box_7() {
    add_meta_box(
        'custom_footer_meta_box_7', // $id
        '7 - Link', // $title
        'show_custom_footer_meta_box_7', // $callback
        'Footer', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_custom_footer_meta_box_7');

// Fields Array -------------------------------------------
$prefix = 'footer_';
$custom_footer_meta_fields_7 = array(
    array(
        'label'=> 'Titulo',
        'desc'  => 'Titulo.',
        'id'    => $prefix.'text_titulo_7',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Url',
        'desc'  => 'ej: https://pagina.com.mx',
        'id'    => $prefix.'text_desc_7',
        'type'  => 'text'
    )
);

// The Callback -----------------------------------------
function show_custom_footer_meta_box_7() {
global $custom_footer_meta_fields_7, $post;

// Use nonce for verification ----------------------------
echo '<input type="hidden" name="custom_footer_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
    foreach ($custom_footer_meta_fields_7 as $field) {
        // get value of this field if it exists for this post
        $meta = get_post_meta($post->ID, $field['id'], true);
        // begin a table row with
        echo '<div class="input-area" style="display: inline-block; margin-left: 40px;">
									<label for="'.$field['id'].'" style="font-weight: bolder; margin-right: 10px;">'.$field['label'].'</label>';
                switch($field['type']) {
                    // case items will go here
										case 'text':
									    echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30"/>';
										break;
                } //end switch
        echo '</div>';
    }
}

// Save the Data ---------------------------------------
function save_custom_footer_meta_7($post_id) {
    global $custom_footer_meta_fields_7;

    // verify nonce
    if (!wp_verify_nonce($_POST['custom_footer_meta_box_nonce'], basename(__FILE__)))
        return $post_id;
    // check autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return $post_id;
    // check permissions
    if ('page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id))
            return $post_id;
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
    }

    // loop through fields and save the data
    foreach ($custom_footer_meta_fields_7 as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_custom_footer_meta_7');

?>
