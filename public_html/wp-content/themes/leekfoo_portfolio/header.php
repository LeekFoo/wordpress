<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport"
content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.2.1/font-awesome-animation.min.css" integrity="sha256-OksDpsEotGZHyoFCHRsdsld3UaZrCcE2d8jXU8rBjHo=" crossorigin="anonymous" />

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
  <div class="header-inner">
    <div class="site-title-wrap">
        <?php
            if(is_home() || is_front_page()) {
                $title_tag_start = '<h1 class="site-title">';
                $title_tag_end = '</h1>';
            } else {
                $title_tag_start = '<p class="site-title">';
                $title_tag_end =  '</p>';
            }
        ?>

        <?php echo $title_tag_start; ?>
            <a href="<?php echo home_url(); ?>">
            <?php bloginfo( 'name' ); ?>
            </a>
        <?php echo $title_tag_end; ?>
    </div>
    <button type="button" id="navbutton" class="navbutton">
        <i class="fas fa-bars"></i>
    </button>
    <div id="header-nav-wrap" class="header-nav-wrap">
        <?php wp_nav_menu( array(
            'theme_location' => 'header-nav',
            'container' => 'nav',
            'container_class' => 'header-nav',
            'container_id' => 'header-nav',
            'fallback_cb' => ''
        ) ); ?>
    </div>
  </div><!--end header-inner-->
</header>
