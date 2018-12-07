<div class="single-author-bio">

  <?php echo get_avatar( get_the_author_meta('user_email'), '125', '' ); ?>

  <div class="single-author-bio-text">

    <h3><?php the_author_posts_link(); ?></h3>

    <?php esc_textarea(the_author_meta('description'));  ?>

  <?php if(get_the_author_meta('linkedin')) : ?>
    <br/>
    <a target="_blank" class="doordash-author-linkedin" href="<?php the_author_meta('linkedin'); ?>">Author's Linkedin</a>
  <?php endif; ?>
  </div><!-- /.single-author-bio-text -->


</div><!-- /.single-author-bio row -->
