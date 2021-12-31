<?php

    function bimm_files() {
        wp_enqueue_style('bimm_main_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'bimm_files');

?>