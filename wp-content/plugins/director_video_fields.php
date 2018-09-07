<?php
/*
Plugin Name: Director Video Links
Version: 1.0
Author URI:
Plugin URI:
Description: Plugin para agregar los Videos de los Directores.
Author: Jorge Arreola
*/

// Add the Meta Box ----------------------------------------
function add_video_meta_box() {
    add_meta_box(
        'video_meta_box', // $id
        '1 - Video', // $title
        'show_video_meta_box', // $callback
        'Directores', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_video_meta_box');

// Fields Array -------------------------------------------
$prefix = 'custom_';
$video_meta_fields = array(
    array(
        'label'=> 'Titulo',
        'desc'  => 'Titulo.',
        'id'    => $prefix.'text_titulo',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Url de Vimeo',
        'desc'  => 'ej: https://player.vimeo.com/video/181581011',
        'id'    => $prefix.'text_url',
        'type'  => 'text'
    )
);

// The Callback -----------------------------------------
function show_video_meta_box() {
global $video_meta_fields, $post;
// Use nonce for verification
echo '<input type="hidden" name="video_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
    foreach ($video_meta_fields as $field) {
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
function save_custom_meta($post_id) {
    global $video_meta_fields;

    // verify nonce
    if (!wp_verify_nonce($_POST['video_meta_box_nonce'], basename(__FILE__)))
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
    foreach ($video_meta_fields as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_custom_meta');


//
//
//
//


// Add the Meta Box 2 -------------------------------------
function add_video_meta_box_2() {
    add_meta_box(
        'video_meta_box_2', // $id
        '2 - Video', // $title
        'show_video_meta_box_2', // $callback
        'Directores', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_video_meta_box_2');

// Fields Array -------------------------------------------
$prefix = 'custom_';
$video_meta_fields_2 = array(
    array(
        'label'=> 'Titulo',
        'desc'  => 'Titulo.',
        'id'    => $prefix.'text_titulo_2',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Url de Vimeo',
        'desc'  => 'ej: https://player.vimeo.com/video/181581011',
        'id'    => $prefix.'text_url_2',
        'type'  => 'text'
    )
);

// The Callback -----------------------------------------
function show_video_meta_box_2() {
global $video_meta_fields_2, $post;

// Use nonce for verification -----------------------------
echo '<input type="hidden" name="video_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
    foreach ($video_meta_fields_2 as $field) {
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
function save_video_meta_2($post_id) {
    global $video_meta_fields_2;

    // verify nonce
    if (!wp_verify_nonce($_POST['video_meta_box_nonce'], basename(__FILE__)))
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
    foreach ($video_meta_fields_2 as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_video_meta_2');


//
//
//
//


// Add the Meta Box 3 -------------------------------------
function add_video_meta_box_3() {
    add_meta_box(
        'video_meta_box_3', // $id
        '3 - Video', // $title
        'show_video_meta_box_3', // $callback
        'Directores', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_video_meta_box_3');

// Fields Array -------------------------------------------
$prefix = 'custom_';
$video_meta_fields_3 = array(
    array(
        'label'=> 'Titulo',
        'desc'  => 'Titulo.',
        'id'    => $prefix.'text_titulo_3',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Url de Vimeo',
        'desc'  => 'ej: https://player.vimeo.com/video/181581011',
        'id'    => $prefix.'text_url_3',
        'type'  => 'text'
    )
);

// The Callback -----------------------------------------
function show_video_meta_box_3() {
global $video_meta_fields_3, $post;

// Use nonce for verification ----------------------------
echo '<input type="hidden" name="video_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
    foreach ($video_meta_fields_3 as $field) {
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
function save_video_meta_3($post_id) {
    global $video_meta_fields_3;

    // verify nonce
    if (!wp_verify_nonce($_POST['video_meta_box_nonce'], basename(__FILE__)))
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
    foreach ($video_meta_fields_3 as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_video_meta_3');

//
//
//
//


// Add the Meta Box 4 -------------------------------------
function add_video_meta_box_4() {
    add_meta_box(
        'video_meta_box_4', // $id
        '4 - Video', // $title
        'show_video_meta_box_4', // $callback
        'Directores', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_video_meta_box_4');

// Fields Array -------------------------------------------
$prefix = 'custom_';
$video_meta_fields_4 = array(
    array(
        'label'=> 'Titulo',
        'desc'  => 'Titulo.',
        'id'    => $prefix.'text_titulo_4',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Url de Vimeo',
        'desc'  => 'ej: https://player.vimeo.com/video/181581011',
        'id'    => $prefix.'text_url_4',
        'type'  => 'text'
    )
);

// The Callback -----------------------------------------
function show_video_meta_box_4() {
global $video_meta_fields_4, $post;

// Use nonce for verification -----------------------------
echo '<input type="hidden" name="video_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
    foreach ($video_meta_fields_4 as $field) {
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
function save_video_meta_4($post_id) {
    global $video_meta_fields_4;

    // verify nonce
    if (!wp_verify_nonce($_POST['video_meta_box_nonce'], basename(__FILE__)))
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
    foreach ($video_meta_fields_4 as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_video_meta_4');


//
//
//
//


// Add the Meta Box 5 -------------------------------------
function add_video_meta_box_5() {
    add_meta_box(
        'video_meta_box_5', // $id
        '5 - Video', // $title
        'show_video_meta_box_5', // $callback
        'Directores', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_video_meta_box_5');

// Fields Array -------------------------------------------
$prefix = 'custom_';
$video_meta_fields_5 = array(
    array(
        'label'=> 'Titulo',
        'desc'  => 'Titulo.',
        'id'    => $prefix.'text_titulo_5',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Url de Vimeo',
        'desc'  => 'ej: https://player.vimeo.com/video/181581011',
        'id'    => $prefix.'text_url_5',
        'type'  => 'text'
    )
);

// The Callback -----------------------------------------
function show_video_meta_box_5() {
global $video_meta_fields_5, $post;

// Use nonce for verification ----------------------------
echo '<input type="hidden" name="video_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
    foreach ($video_meta_fields_5 as $field) {
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
function save_video_meta_5($post_id) {
    global $video_meta_fields_5;

    // verify nonce
    if (!wp_verify_nonce($_POST['video_meta_box_nonce'], basename(__FILE__)))
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
    foreach ($video_meta_fields_5 as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_video_meta_5');

//
//
//
//


// Add the Meta Box 6 -------------------------------------
function add_video_meta_box_6() {
    add_meta_box(
        'video_meta_box_6', // $id
        '6 - Video', // $title
        'show_video_meta_box_6', // $callback
        'Directores', // $page
        'normal', // $context
        'high'); // $priority
}
add_action('add_meta_boxes', 'add_video_meta_box_6');

// Fields Array -------------------------------------------
$prefix = 'custom_';
$video_meta_fields_6 = array(
    array(
        'label'=> 'Titulo',
        'desc'  => 'Titulo.',
        'id'    => $prefix.'text_titulo_6',
        'type'  => 'text'
    ),
    array(
        'label'=> 'Url de Vimeo',
        'desc'  => 'ej: https://player.vimeo.com/video/181581011',
        'id'    => $prefix.'text_url_6',
        'type'  => 'text'
    )
);

// The Callback -----------------------------------------
function show_video_meta_box_6() {
global $video_meta_fields_6, $post;

// Use nonce for verification ----------------------------
echo '<input type="hidden" name="video_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';
    foreach ($video_meta_fields_6 as $field) {
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
function save_video_meta_6($post_id) {
    global $video_meta_fields_6;

    // verify nonce
    if (!wp_verify_nonce($_POST['video_meta_box_nonce'], basename(__FILE__)))
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
    foreach ($video_meta_fields_6 as $field) {
        $old = get_post_meta($post_id, $field['id'], true);
        $new = $_POST[$field['id']];
        if ($new && $new != $old) {
            update_post_meta($post_id, $field['id'], $new);
        } elseif ('' == $new && $old) {
            delete_post_meta($post_id, $field['id'], $old);
        }
    } // end foreach
}
add_action('save_post', 'save_video_meta_6');



?>
