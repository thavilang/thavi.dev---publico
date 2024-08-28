<?php

function sprite($icon, $title = '', $sprite = 'sprite')
{
    return '<svg role="img" aria-label="Ícone ' . $title . '"><title>' . $title . '</title><use xlink:href="' . get_template_directory_uri() . '/assets/images/' . $sprite . '.svg#' . $icon . '" /></svg>';
}

function getPostName()
{
    $current_post = get_post();
    $post_name = $current_post->post_name;
    return $post_name;
}
add_action('wp_head', 'getPostName');

function assetsTheme()
{
    wp_enqueue_style('fontes', get_template_directory_uri() . '/assets/fontes/stylesheet.css', '', time(), 'all');

    if (is_single()) {
        wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/single.css', '', time(), 'all');
    } else {
        wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/' . getPostName() . '.css', '', time(), 'all');
    }

    wp_enqueue_script('abas', get_template_directory_uri() . '/assets/js/modulos/abas.js', array(), time(), true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/plugins/swiper.min.js', array(), time(), true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array(), time(), true);
}

add_action('wp_enqueue_scripts', 'assetsTheme');
add_theme_support('post-thumbnails');
