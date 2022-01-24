<?php

function load_js() {
    wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/test.js', array(), 1.0, true);
    wp_enqueue_script( 'custom-element', get_template_directory_uri() . '/dist/custom-element.js', array(), 1.0, true);
}
add_action("wp_enqueue_scripts", "load_js");
