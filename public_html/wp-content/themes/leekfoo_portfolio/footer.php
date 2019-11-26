<footer id="footer" class="footer">
  <div class="footer-inner">
    <div class="footer-nav-wrap">
    <?php
        wp_nav_menu( array(
            'theme_location' => 'footer-nav',
            'container' => 'nav',
            'container_class' => 'footer-nav',
            'container_id' => 'footer-nav',
            'fallback_cb' => ''
        ));
    ?>
    <div class="social-link">
        <ul>
            <li><a href="#"><i class="fab fa-facebook-square fa-3x faa-wrench animated-hover"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter-square fa-3x faa-wrench animated-hover"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram fa-3x faa-wrench animated-hover"></i></a></li>
        </ul>
    </div>
    </div>
    <div class="copyright">
        <small>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> All Rights Reserved.</small>
    </div>
  </div><!--end footer-inner-->
</footer>
<?php wp_footer(); ?>
</body>
</html>
