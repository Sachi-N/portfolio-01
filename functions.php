<?php
function portfolio_scripts(){
    // css
    wp_enqueue_style('reset',get_template_directory_uri().'/css/reset.css');
    wp_enqueue_style('bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
    wp_enqueue_style('swiper',get_template_directory_uri().'/css/swiper.min.css');
    wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.css');
    wp_enqueue_style('style',get_template_directory_uri().'/style.css');
    

    // js
    wp_enqueue_script('jquery');
    wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.min.js');
    wp_enqueue_script('youtube_js', 'https://www.youtube.com/iframe_api');
    wp_enqueue_script('swiper_js', get_template_directory_uri().'/js/swiper.min.js');
    wp_enqueue_script('script', get_template_directory_uri().'/js/script.js');

   
  
}
add_action('wp_enqueue_scripts','portfolio_scripts');



function portfolio_setup(){
    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_image_size('portfolio-thumbnail', 190, 130, true);

    add_image_size('portfolio-hero', 1200, 630, true);

    
}
add_action('after_setup_theme','portfolio_setup');