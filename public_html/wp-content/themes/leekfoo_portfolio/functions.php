<?php
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
register_nav_menu( 'header-nav',  ' ヘッダーナビゲーション ' );
register_nav_menu( 'footer-nav',  ' フッターナビゲーション ' );

function custom_scripts(){
  wp_enqueue_script( 'custom_script', get_template_directory_uri() .'/js/custom.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts' , 'custom_scripts' );