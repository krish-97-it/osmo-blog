<?php
/**
 * Category template file
 * This is a generic template file for category
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */


$category = get_category( get_query_var( 'cat' ) );
$argsForPosts = array(
  'post_type' => 'post',
  'posts_per_page' => 3,
  'cat' => $category->cat_ID,
  'paged' => $paged,
);
$posts_wp = new WP_Query( $argsForPosts );

$context = Timber::get_context();
$post    = new TimberPost();
$posts   = Timber::get_posts( $posts_wp );

foreach ($posts as $_post){
  $_post->img_from_wysiwyg = getFirstImgFromHtml($_post->post_content);
}

$context['posts'] = $posts;
$context['post'] = $post;
$context['wp_pagenavi'] = wp_pagenavi(
  [
      'echo' => false,
      'query' => $posts_wp,
  ]
);

Timber::render('templates/index.twig', $context);