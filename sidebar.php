<?php if ( !is_category() ) : ?>

<?php
  $orig_post = $post;
  global $post;
  $categories = get_the_category($post->ID);
  if ($categories) :
?>

<?php
  $category_ids = array();

  foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

  $args=array(
    'category__in' => $category_ids,
    'post__not_in' => array($post->ID),
    'posts_per_page'=> 3,
    'ignore_sticky_posts'=> 1
  );

  $related_posts_query = new WP_Query( $args );

  if ($related_posts_query->post_count > 0) :
?>

<div>
  <h4 class="doordash-sidebar-header">Related Posts</h4>

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
<?php endif; ?>
<?php endif; ?>


<div>
  <h4 class="doordash-sidebar-header">Related Positions</h4>
  <div class="doordash-related-jobs-container">
  </div>

  <div class="doordash-all-jobs-container">
    <a href="https://boards.greenhouse.io/doordash#2438" class="doordash-all-jobs-link" target="_blank">
      See all jobs
    </a>
  </div>
</div>
