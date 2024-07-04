<?php
/*
 * Remove robots meta tags from Yoast SEO
 * Credit: Yoast development team
 * Last Tested: May 09 2020 using Yoast SEO 14.0 on WordPress 5.4.1
 */

add_filter( 'wpseo_robots', '__return_false' );
add_filter( 'wpseo_googlebot', '__return_false' ); // Yoast SEO 14.x or newer
add_filter( 'wpseo_bingbot', '__return_false' ); // Yoast SEO 14.x or newer
