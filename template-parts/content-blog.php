<?php if(has_post_thumbnail()) : ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post row align-items-center ' ); ?>>

    <div class="blog-post-thumbnail-zone col-12 col-lg-6">

      <a href="<?php echo get_permalink() ?>"><?php the_post_thumbnail('medium_large', array('class' => 'blog-post-thumbnail')); ?></a>

    </div><!-- /.blog-post-thumbnail-zone -->

    <div class="blog-post-text-zone col-12 col-lg-6">

      <div class="author align-items-end">

        <?php echo get_avatar( get_the_author_meta('user_email'), '35', '' ); ?>

        <div class="author-info">

          <?php the_author_posts_link(); ?>

        </div><!-- /.author-info -->

      </div><!-- /.author-->

        <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="meta">

          <span class="date"><?php the_time( get_option('date_format') ); ?></span>

          <span>&nbsp;·&nbsp; </span>

          <span class="category"><?php neori_show_categories_except("Featured"); ?></span>

          <span>&nbsp;·&nbsp; </span>

          <span class="doordash-read-time"><?php echo (ceil(strlen(get_the_content()) / 300)); ?> min read</span>

        </div><!-- /.meta -->

        <?php if(!get_theme_mod('neori_slice_type7_custom_excerpt_setting')) : ?>

          <p><?php echo wp_trim_words( get_the_content(), 28, '...' ); ?></p>

        <?php else: ?> 

          <p><?php echo get_the_excerpt(); ?></p> 
      
        <?php endif; ?> 

    </div><!-- /.blog-post-text-zone -->

  </article>

  <?php else: ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-post simple row align-items-center ' ); ?>>

      <div class="blog-post-text-zone simple col-12">

        <div class="author align-items-end">

          <?php echo get_avatar( get_the_author_meta('user_email'), '35', '' ); ?>

          <div class="author-info">

            <?php the_author_posts_link(); ?>

          </div><!-- /.author-info -->

        </div><!-- /.author-->

        <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>

        <div class="meta">

          <span class="date"><?php the_time( get_option('date_format') ); ?></span>

          <span class="category"><?php neori_show_categories_except("Featured"); ?></span>

          <span class="comments"><?php comments_popup_link( '0'.esc_html__(' Comments', 'neori'), '1'.esc_html__(' Comment', 'neori'), '%'.esc_html__(' Comments', 'neori'), '', ''); ?></span>

        </div><!-- /.meta -->

        <?php if(!get_theme_mod('neori_slice_type7_custom_excerpt_setting')) : ?>

          <p><?php echo wp_trim_words( get_the_content(), 28, '...' ); ?></p>

        <?php else: ?> 

          <p><?php echo get_the_excerpt(); ?></p> 

        <?php endif; ?>

    </div><!-- /.blog-post-text-zone -->

  </article>


  <?php endif; ?>
