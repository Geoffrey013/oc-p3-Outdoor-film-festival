<footer>
  <div class="container">
    <div class="row footer-content">
      <div class="col-md-3 social-links">
        <ul class="list-inline">
          <li><a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
        </ul>
      </div>

      <div class="col-md-6">
        <h2 class="logo">les films de plein air<span>.</span></h2>      
      </div>

      <div class="col-md-3 legal-links">

        <?php
            wp_nav_menu( array(
                'menu'              => 'secondary',
                'theme_location'    => 'secondary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'menu-container',
                'container_id'      => '',
                'menu_class'        => 'menu-footer',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker())
            );
        ?>
        
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

</body>
</html>
