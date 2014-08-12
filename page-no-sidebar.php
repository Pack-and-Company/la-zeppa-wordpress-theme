<?php
/*
Template Name: No Sidebar
*/
?>

<?php get_header(); ?>

<!-- content left (main content column) -->
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; wp_reset_query(); ?>
<!-- end of content left (main content column) -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>