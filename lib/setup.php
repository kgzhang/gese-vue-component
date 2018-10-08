<?php
function geseThemeSetup()
{
    /* ----------------------------------------------------
         * Register Custom Image Sizes and add theme support for post thumbnail
         * ---------------------------------------------------- */
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(672, 372, true);
    add_image_size('max', 1920, 1080, false);

    /*
     *  Register Navigation Menu
     * */

    register_nav_menus(array(
        'primary' => __('Main Navigation'),
        'secondary' => __('Secondary Navigation'),
    ));

    /*
     * Enqueue Frontend scripts styles
     * */

    function enqueue_frontend_scripts_styles()
    {
        //  wp_enqueue_script('jquery', null, null, null, true);
        wp_enqueue_script('MainJs', get_template_directory_uri() . '/dist/js/main.js', null, null, true);
        wp_enqueue_style('MainStyles', get_template_directory_uri() . '/dist/css/main.css', null, null, null);

        if (WP_DEV == true) {
            wp_enqueue_script('LiveReload', 'http://localhost:35729/livereload.js', null, null, true);
        }   
    }

    add_action('wp_enqueue_scripts', 'enqueue_frontend_scripts_styles');

    /* ----------------------------------------------------
         * Enqueue Admin Scripts/Styles
         * ---------------------------------------------------- */
    // function alt_enqueue_admin_scripts_styles()
    // {
    //     wp_enqueue_style('admin_css', get_template_directory_uri() . '/dist/css/admin.css', null, null);
    // }

    // add_action('admin_enqueue_scripts', 'alt_enqueue_admin_scripts_styles');
}


add_action('after_setup_theme', 'geseThemeSetup');

// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');