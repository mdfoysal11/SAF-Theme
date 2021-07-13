<?php 
function saf_bootstraping(){
    load_theme_textdomain("saf");
    add_theme_support( "title-tag" );
    add_theme_support( "post-thumbnails" );
}
add_action( "after_setup_theme", "saf_bootstraping");

function assets(){
    wp_enqueue_style( 'bootstrap', "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" );
	wp_enqueue_style("style-css", get_stylesheet_uri());
    wp_enqueue_script("main-js", get_theme_file_uri("/js/main.js"),array("jquery"),'',true);

}
add_action("wp_enqueue_scripts","assets");
