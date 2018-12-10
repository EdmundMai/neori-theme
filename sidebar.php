<?php if ( !is_category() ) : ?>
<div>
  <h4 class="doordash-sidebar-heaader">Related Posts</h4>

  <div class="doordash-related-posts-container">

    <?php

      $orig_post = $post;
      global $post;
      $categories = get_the_category($post->ID);

      if ($categories) {

        $category_ids = array();

        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

        $args=array(
          'category__in' => $category_ids,
          'post__not_in' => array($post->ID),
          'posts_per_page'=> 3,
          'ignore_sticky_posts'=> 1
        );

        $related_posts_query = new WP_Query( $args );

        while( $related_posts_query->have_posts() ) {

          $related_posts_query->the_post();

    ?>

            <?php if(has_post_thumbnail()) : ?>

              <div class="doordash-related-post-row">

                <div>
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'doordash-related-post-img')); ?></a>
                </div>
                <h4 class="doordash-related-post-title"><a rel="external" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

              </div><!-- /.custom-card -->

            <?php endif; ?>

    <?php }
                }
      $post = $orig_post;
      wp_reset_postdata();
    ?>

  </div><!-- /.card-deck -->


</div><!-- /.related-posts -->
<?php endif; ?>


<div>
  <h4 class="doordash-sidebar-heaader">Related Positions</h4>
  <div>
    <a href="#" class="doordash-related-job-link">
      <h5 class="doordash-job-title">Job title really really long</h5>
      <h5 class="doordash-job-location">Location</h5>
    </a>
    <a href="#" class="doordash-related-job-link">
      <h5 class="doordash-job-title">Job title really really long</h5>
      <h5 class="doordash-job-location">Location</h5>
    </a>
  </div>

  <div>
    <a href="https://www.doordash.com/careers/" class="doordash-all-jobs-link" target="_blank">
      See all jobs
    </a>
  </div>
</div>
