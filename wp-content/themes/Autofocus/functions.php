<?php
add_action( 'after_setup_theme', function() {
    register_nav_menu( 'main-menu', 'Menu principal' );
    add_theme_support( 'post-thumbnails' );
});



wp_enqueue_style('mon_style', get_template_directory_uri(). '/style.css', false);
wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js',  false);
wp_enqueue_script( 'scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js', false);
wp_enqueue_script( 'mon_script', get_template_directory_uri(). '/menu.js', false);
wp_enqueue_script( 'mon_anim', get_template_directory_uri(). '/anims.js', false);



// Defer deux functions JS

function defer_parsing_of_js ( $url ) {

    if ( FALSE === strpos( $url, 'menu.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return "$url' defer ";
}
add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );

function defer_parsing_of_js2 ( $url ) {

    if ( FALSE === strpos( $url, 'anims.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return "$url' defer ";
}
add_filter( 'clean_url', 'defer_parsing_of_js2', 11, 1 );
