<?php
/**
 * Search results page
 *
 * Methods for TimberHelper can be found in the /lib sub-directory
 *
 * @package  WordPress
 * @subpackage  Timber
 * @since   Timber 0.1
 */

$argsForPosts = array(
  'post_type' => 'post',
  'posts_per_page' => 3,
  's' => get_search_query(),
  'paged' => $paged,
);
$posts_wp = new WP_Query( $argsForPosts );

$templates        = array( 'search.twig', 'archive.twig', 'index.twig' );
$context          = Timber::context();
$context['title'] = 'Search results for ' . get_search_query();
$posts            = Timber::get_posts( $posts_wp );

foreach ($posts as $_post){
  $_post->img_from_wysiwyg = getFirstImgFromHtml($_post->post_content);
}

$context['posts'] = $posts;
$context['wp_pagenavi'] = wp_pagenavi(
  [
      'echo' => false,
      'query' => $posts_wp,
  ]
);

Timber::render($templates, $context);