<?php

/*
 * Template Name: Classic
 * Template Post Type: post
 */

get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'template-parts/single/content-single-classic', get_post_format() ); ?>

  <?php endwhile; ?>

<?php get_footer(); ?>
