<?php

function twentyseventeen_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
     * If you're building a theme based on Twenty Seventeen, use a find and replace
     * to change 'twentyseventeen' to the name of your theme in all the template files.
     */
    load_theme_textdomain('01');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');

    add_image_size('twentyseventeen-featured-image', 2000, 1200, true);

    add_image_size('twentyseventeen-thumbnail-avatar', 100, 100, true);

    add_theme_support('html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ));

    // Add theme support for Custom Logo.
    add_theme_support('custom-logo', array(
        'width' => 250,
        'height' => 250,
        'flex-width' => true,
    ));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');



    add_theme_support('starter-content', $starter_content);
}

add_action('after_setup_theme', 'twentyseventeen_setup');

/**
 * Enqueue scripts and styles.
 */
function my_scripts() {

//    wp_enqueue_style('color-pickr', get_template_directory_uri().('/css/includes/color-pickr/color-pickr.css'));
    wp_enqueue_style('font', 'http://fonts.googleapis.com/css?family=Hind:400,500,300,600,700');
    wp_enqueue_style('font-awesome', get_template_directory_uri().('/assets/plugins/font-awesome/css/font-awesome.min.css'));
    wp_enqueue_style('simple-line-icons', get_template_directory_uri().('/assets/plugins/simple-line-icons/simple-line-icons.min.css'));
    wp_enqueue_style('bootstrap', get_template_directory_uri().('/assets/plugins/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('animate', get_template_directory_uri().('/assets/pages/css/animate.css'));
    wp_enqueue_style('owl', get_template_directory_uri().('/assets/plugins/owl.carousel/assets/owl.carousel.css'));
    wp_enqueue_style('cubeportfolio', get_template_directory_uri().('/assets/plugins/cubeportfolio/cubeportfolio/css/cubeportfolio.min.css'));
    wp_enqueue_style('layout', get_template_directory_uri().('/assets/onepage2/css/layout.css'));
    wp_enqueue_style('style', get_template_directory_uri().('/style.css'));


    // Load the html5 shiv.
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/plugins/jquery.min.js');
    wp_enqueue_script('jquery-migrate', get_template_directory_uri().'/assets/plugins/jquery-migrate.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/plugins/bootstrap/js/bootstrap.min.js');
    wp_enqueue_script('jquery-easing', get_template_directory_uri().'/assets/plugins/jquery.easing.js');
    wp_enqueue_script('jquery-parallax', get_template_directory_uri().'/assets/plugins/jquery.parallax.js');
    wp_enqueue_script('smooth-scroll', get_template_directory_uri().'/assets/plugins/smooth-scroll/smooth-scroll.js');
    wp_enqueue_script('owl-carousel', get_template_directory_uri().'/assets/plugins/owl.carousel/owl.carousel.min.js');


    wp_enqueue_script('jquery-cubeportfolio', get_template_directory_uri().'/assets/plugins/cubeportfolio/cubeportfolio/js/jquery.cubeportfolio.min.js');
    wp_enqueue_script('portfolio-js', get_template_directory_uri().'/assets/onepage2/scripts/portfolio.js');
    wp_enqueue_script('bs-carousel', get_template_directory_uri(). '/assets/pages/scripts/bs-carousel.js');
    wp_enqueue_script('layout-js', get_template_directory_uri().'/assets/onepage2/scripts/layout.js');
}



add_action('wp_enqueue_scripts', 'my_scripts');







