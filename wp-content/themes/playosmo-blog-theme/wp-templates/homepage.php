<?php
/**
 * Template Name: Homepage
 */

$argsForPosts = array(
  'post_type' => 'post',
  'posts_per_page' => 3,
  'paged' => get_query_var('page'),
);
$posts_wp = new WP_Query( $argsForPosts );

$context = Timber::get_context();
$post = new TimberPost();
$posts = Timber::get_posts( $posts_wp );

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

Timber::render('templates/home/home.twig', $context);