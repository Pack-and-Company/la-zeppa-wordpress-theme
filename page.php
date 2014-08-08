<?php get_header(); ?>

<!-- content left (main content column) -->
<div id="content_left">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	  <?php the_content(); ?>
	<?php endwhile; wp_reset_query(); ?>
</div>
<!-- end of content left (main content column) -->
<!-- sidebar -->
<div id="sidebar">
	<?php
	if ( has_post_thumbnail() ) {
		the_post_thumbnail();
		the_post_thumbnail_caption();
	}
	?>
</div>
<!-- end of sidebar -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>