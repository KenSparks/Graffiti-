<?php 

function graffiti_files() {
    wp_enqueue_style('graffiti_files', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'graffiti_files');

?>