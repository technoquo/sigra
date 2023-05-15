<?php
//Include
require get_template_directory() . '/includes/queries.php';
function gymfitness_setup()
{
    // Imagenes destacadas
    add_theme_support('post-thumbnails');

    // Titulos para SEO
    add_theme_support('title-tag');
}


add_action('after_setup_theme', 'gymfitness_setup');

function sigra_menus()
{
    register_nav_menus([
        'menu_principal' => __('Menu Principal', 'sigra'),

    ]);
}

add_action('init', 'sigra_menus');


function sigra_scripts_styles()
{
    // Archivos CSS
    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');
    wp_enqueue_style('swipper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), '9.1.1');
    wp_enqueue_style('modal-video', get_template_directory_uri() . '/css/modal-video.min.css', array(), '1.0.0');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');

    // Archvios JS
    wp_enqueue_script("jquery");
    wp_enqueue_script('swipper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), '9.1.1', true);
    wp_enqueue_script('jquery-modal-video', get_template_directory_uri() . '/js/jquery-modal-video.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'sigra_scripts_styles');


function get_vimeo_data_from_id($video_id, $data)
{
    $request = wp_remote_get('https://vimeo.com/api/oembed.json?url=https://vimeo.com/' . $video_id);

    $response = wp_remote_retrieve_body($request);

    $video_array = json_decode($response, true);

    return $video_array[$data];
}

function my_custom_template_directory($slug, $name = null)
{
    if ($name) {
        $template = sprintf('%s/%s-%s.php', 'my-custom-directory', $slug, $name);
    } else {
        $template = sprintf('%s/%s.php', 'my-custom-directory', $slug);
    }
    return $template;
}
add_filter('get_template_part', 'my_custom_template_directory', 10, 2);
