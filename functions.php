<?php
/* =========================
   Theme Setup
========================= */
function harmoni_theme_setup() {

    // دعم الصور البارزة
    add_theme_support('post-thumbnails');

    // تسجيل القوائم
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'harmoni'),
        'footer'  => __('Footer Menu', 'harmoni'),
    ));

}
add_action('after_setup_theme', 'harmoni_theme_setup');


/* =========================
   Enqueue CSS & JS
========================= */
function harmoni_yoga_theme_assets() {

    // style.css الرئيسي
    wp_enqueue_style(
        'harmoni-style',
        get_stylesheet_uri(),
        [],
        wp_get_theme()->get('Version')
    );

    // ستايل إضافي
    wp_enqueue_style(
        'harmoni-extra-style',
        get_template_directory_uri() . '/assets/css/styles.css',
        [],
        wp_get_theme()->get('Version')
    );

    // JavaScript (قائمة الموبايل)
    wp_enqueue_script(
        'harmoni-main-js',
        get_stylesheet_directory_uri() . '/assets/js/main.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'harmoni_yoga_theme_assets');



function news_slider_scripts() {
  wp_enqueue_script(
    'news-slider',
    get_template_directory_uri() . '/assets/js/news-slider.js',
    array(),
    null,
    true
  );
}
add_action('wp_enqueue_scripts', 'news_slider_scripts');

/* =========================
   Custom Post Types
========================= */
function harmoni_register_cpts() {

    // Services
    register_post_type('service', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name' => 'Service'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-hammer',
        'show_in_rest' => true
    ));

    // Highlights
    register_post_type('highlight', array(
        'labels' => array(
            'name' => 'Highlights',
            'singular_name' => 'Highlight'
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-star-filled',
        'show_in_rest' => true
    ));


    // NEWS CPT
    register_post_type('news', [
    'labels' => [
        'name' => 'News',
        'singular_name' => 'News'
    ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'news'],
    'supports' => ['title','editor','thumbnail','excerpt'],
]);

    // Team
    register_post_type('team_member', array(
        'labels' => array(
            'name' => 'Team',
            'singular_name' => 'Team Member'
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'team',
            'with_front' => false
        ),
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-groups',
        'show_in_rest' => true
    ));
}
add_action('init', 'harmoni_register_cpts');