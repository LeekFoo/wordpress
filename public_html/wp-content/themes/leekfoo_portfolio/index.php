<?php get_header(); ?>
<div class="container">
  <div class="contents">
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <?php get_template_part('loop-content'); ?>
    <?php endwhile; endif; ?>
  </div><!--end contents-->
  <?php get_sidebar(); ?>
</div><!--end container-->
<?php get_footer(); ?>
