<?php

/*
 * Template Name: Classic NS
 * Template Post Type: post
 */

get_header(); ?>

  <?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'template-parts/single/content-single-classic-ns', get_post_format() ); ?>

  <?php endwhile; ?>

<?php get_footer(); ?>
