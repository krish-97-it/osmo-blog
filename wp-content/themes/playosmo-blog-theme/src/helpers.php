<?php

/**
 * Function that increment post view meta
 *
 * @param int $postID
 *
 * @return void
 */
function setPostViews($postID)
{
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	} else {
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}

/**
 * Function that return first img tag from html node
 *
 * @param string $html
 *
 * @return string
 */
function getFirstImgFromHtml($html)
{
	preg_match('/(?<!_)src=([\'"])?(.*?)\\1/', $html, $image);
	if (array_key_exists(2, $image)) {
		return $image[2];
	} else {
		return null;
	}
}

/**
 * Returns true if visitor is on a tag or search page
 *
 * @return boolean $index
 */

function shouldntBeIndexed()
{
	$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
	$index = preg_match('/\/tag\/|(\?s=)(.*post_type=post)/', $actual_link);

	return $index;
}
