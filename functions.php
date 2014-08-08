<?php

register_nav_menus( array('primary' => 'Primary Menu') );
register_sidebar( array('name' => 'Sidebar') );

add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

function my_init_method() {
  if(!is_admin()) {
    wp_enqueue_script( 'jquery' );
    wp_register_style( 'global', get_bloginfo('template_directory') . '/css/global.css');
    wp_enqueue_style( 'global' );
  }
}
add_action('init', 'my_init_method');

function the_post_thumbnail_caption() {
  global $post;

  $thumbnail_id    = get_post_thumbnail_id($post->ID);
  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

  if ($thumbnail_image && isset($thumbnail_image[0])) {
    echo '<p>'.$thumbnail_image[0]->post_excerpt.'</p>';
  }
}

?>