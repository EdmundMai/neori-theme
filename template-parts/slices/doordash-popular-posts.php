<div class="slice type1">

  <a href="./category/<?php echo esc_html( get_theme_mod ('neori_doordash_popular_posts_category_slug_setting', '')); ?>/"><h2 class="doordash-category-title"><?php echo esc_html( get_theme_mod ('neori_doordash_popular_posts_category_name_setting', '')); ?></h2></a>

  <div class="card-deck">

    <?php

      $args = array(
        'type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => esc_html ( get_theme_mod ('neori_doordash_popular_posts_posts_number_setting', '')),
        'category_name' => esc_html ( get_theme_mod ('neori_doordash_popular_posts_category_slug_setting', '')),
        'ignore_sticky_posts' => 1,
        'offset' => esc_html ( get_theme_mod ('neori_doordash_popular_posts_offset_posts_setting', '')),
      );

      $slice_query = new WP_Query($args);

    ?>

    <?php if( $slice_query->have_posts() ): while( $slice_query->have_posts() ): $slice_query->the_post(); ?>

      <?php get_template_part('template-parts/slices/content', 'doordash-popular-posts'); ?>

    <?php endwhile; ?>

    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

  </div><!-- /.card-deck -->

</div><!-- /.slice type1 -->
