<?php

/**
 * Assets
 */
function cisf_enqueue_resources()
{
    wp_enqueue_style('bootstrap-5-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-5-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'], false, true);
    wp_enqueue_script('jquery-countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', ['bootstrap-5-js'], false, true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', ['jquery-countdown'], false, true);
}
add_action('wp_enqueue_scripts', 'cisf_enqueue_resources');
