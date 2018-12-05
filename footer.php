<footer class="footer">

  <div class="container">

    <div class="social-icons">

      <?php if(get_theme_mod('neori_footer_first_social_icon_type_setting')) : ?>

        <a href="<?php echo esc_url( get_theme_mod ('neori_footer_first_social_icon_url_setting', '')); ?>" target="_blank"><i class="fa fa-<?php echo esc_html( get_theme_mod ('neori_footer_first_social_icon_type_setting', '')); ?>"></i></a>

      <?php endif; ?>

      <?php if(get_theme_mod('neori_footer_second_social_icon_type_setting')) : ?>

        <a href="<?php echo esc_url( get_theme_mod ('neori_footer_second_social_icon_url_setting', '')); ?>" target="_blank"><i class="fa fa-<?php echo esc_html( get_theme_mod ('neori_footer_second_social_icon_type_setting', '')); ?>"></i></a>

      <?php endif; ?>

      <?php if(get_theme_mod('neori_footer_third_social_icon_type_setting')) : ?>

        <a href="<?php echo esc_url( get_theme_mod ('neori_footer_third_social_icon_url_setting', '')); ?>" target="_blank"><i class="fa fa-<?php echo esc_html( get_theme_mod ('neori_footer_third_social_icon_type_setting', '')); ?>"></i></a>

      <?php endif; ?>

      <?php if(get_theme_mod('neori_footer_fourth_social_icon_type_setting')) : ?>

        <a href="<?php echo esc_url( get_theme_mod ('neori_footer_fourth_social_icon_url_setting', '')); ?>" target="_blank"><i class="fa fa-<?php echo esc_html( get_theme_mod ('neori_footer_fourth_social_icon_type_setting', '')); ?>"></i></a>

      <?php endif; ?>

      <?php if(get_theme_mod('neori_footer_fifth_social_icon_type_setting')) : ?>

        <a href="<?php echo esc_url( get_theme_mod ('neori_footer_fifth_social_icon_url_setting', '')); ?>" target="_blank"><i class="fa fa-<?php echo esc_html( get_theme_mod ('neori_footer_fifth_social_icon_type_setting', '')); ?>"></i></a>

      <?php endif; ?>

      <?php if(get_theme_mod('neori_footer_sixth_social_icon_type_setting')) : ?>

        <a href="<?php echo esc_url( get_theme_mod ('neori_footer_sixth_social_icon_url_setting', '')); ?>" target="_blank"><i class="fa fa-<?php echo esc_html( get_theme_mod ('neori_footer_sixth_social_icon_type_setting', '')); ?>"></i></a>

      <?php endif; ?>

    </div><!-- /.social-icons -->

    <p class="additional-text"><?php echo wp_kses_post( get_theme_mod ('neori_additional_footer_text_setting', '')); ?></p>

    <nav class="main-navigation doordash-footer-navigation">

      <div class="doordash-footer-column">
        <h5 class="doordash-footer-header">Blog Categories</h5>
        <?php
          wp_nav_menu( array(
            'theme_location' => 'footer-menu',
            'fallback_cb' => 'false',
            'menu_class' => 'doordash-footer-menu-list',
          ) );
          ?>
      </div>

      <div class="doordash-footer-column">
        <h5 class="doordash-footer-header">Social</h5>
        <ul class="doordash-footer-menu-list">
          <li><a target="_blank" href="https://www.linkedin.com/company/doordash">LinkedIn</a></li>
          <li><a target="_blank" href="https://www.glassdoor.com/Reviews/DoorDash-Reviews-E813073.htm">Glassdoor</a></li>
          <li><a target="_blank" href="https://twitter.com/andyfang?lang=en">Twitter</a></li>
          <li><a target="_blank" href="https://www.facebook.com/DoorDash/">Facebook</a></li>
          <li><a target="_blank" href="http://instagram.com/doordash">Instagram</a></li>
        </ul>
      </div>

      <div class="doordash-footer-column">
        <h5 class="doordash-footer-header">DoorDash Links</h5>
        <ul class="doordash-footer-menu-list">
          <li><a target="_blank" href="https://www.doordash.com/">DoorDash.com</a></li>
          <li><a target="_blank" href="https://www.doordash.com/about/">About Us</a></li>
          <li><a target="_blank" href="https://www.doordash.com/careers/">Careers</a></li>
          <li><a target="_blank" href="http://blog.doordash.com/">Blog</a></li>
        </ul>
      </div>

    </nav><!-- #site-navigation -->

    <p class="copyright"><?php echo esc_html( 'Copyright &copy;' . date('Y'), 'neori' ); ?> <?php bloginfo('name'); ?></p>

    <?php if(!get_theme_mod('neori_hide_author_credit_setting')) : ?>
      <p class="credit"><?php echo esc_html( 'Neori theme, designed by', 'neori' ); ?> <a href="<?php echo esc_url( 'http://litmotion.net', 'neori' ); ?>"><?php echo esc_html( 'litMotion Templates', 'neori' ); ?></a></p>
    <?php endif; ?>

  </div><!-- /.container -->
xxxx
<?php
      function debug_to_console( $data ) {
          $output = $data;
          if ( is_array( $output ) )
              $output = implode( ',', $output);

          echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
      }
      debug_to_console("pppppppp");
      // $menu_items = wp_get_nav_menu_items(20);
      // foreach($menu_item as $menu_items) {
        // debug_to_console("xxxxxxx");
        // echo '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
      // }
?>

</footer>



<a href="#0" class="buttontop-top"><i class="fa fa-arrow-up"></i></a>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
