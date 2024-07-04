<?php

$strings = array(
	array(
		'name' => 'shop',
		'string' => 'Shop'
	),
	array(
		'name' => 'now',
		'string' => 'Now'
	),
	array(
		'name' => 'all-posts',
		'string' => 'All Posts'
	),
	array(
		'name' => 'search-title',
		'string' => 'Search'
	),
	array(
		'name' => 'search-placeholder',
		'string' => 'What&nbsp;are&nbsp;you&nbsp;looking&nbsp;for&nbsp;?'
	),
	array(
		'name' => 'newsletter-title',
		'string' => 'Sign up for our newsletter!'
	),
	array(
		'name' => 'newsletter-description',
		'string' => 'Stay up-to-date with Osmo and also receive special deals and offers!'
	),
	array(
		'name' => 'newsletter-placeholder',
		'string' => 'Enter&nbsp;your&nbsp;email'
	),
	array(
		'name' => 'newsletter-success',
		'string' => 'Thank you for signing up for updates from Osmo!',
	),
	array(
		'name' => 'newsletter-button',
		'string' => 'Sign Up'
	),
	array(
		'name' => 'featured-title',
		'string' => 'Featured Products'
	),
	array(
		'name' => 'featured-link',
		'string' => 'Learn More'
	),
	array(
		'name' => 'recommended-title',
		'string' => 'Recommended Posts'
	),
	array(
		'name' => 'recommended-most-popular',
		'string' => 'Most Popular'
	),
	array(
		'name' => 'recommended-latest',
		'string' => 'Latest'
	),
	array(
		'name' => 'instagram-title',
		'string' => 'Osmo on Instagram'
	),
	array(
		'name' => 'continue-reading',
		'string' => 'Continue Reading'
	),
	array(
		'name' => 'related-posts',
		'string' => 'Related Posts'
	),
	array(
		'name' => 'footer-home',
		'string' => 'Home'
	),
	array(
		'name' => 'footer-store',
		'string' => 'Find in Store'
	),
	array(
		'name' => 'footer-club',
		'string' => 'Osmo Social Club'
	),
	array(
		'name' => 'footer-about',
		'string' => 'About Us'
	),

	array(
		'name' => 'footer-blog',
		'string' => 'Blog'
	),
	array(
		'name' => 'footer-jobs',
		'string' => 'Jobs'
	),
	array(
		'name' => 'footer-support',
		'string' => 'Support'
	),
	array(
		'name' => 'footer-privacy',
		'string' => 'Privacy Policy'
	),
	array(
		'name' => 'footer-terms',
		'string' => 'Terms of Use'
	),
	array(
		'name' => 'footer-return',
		'string' => 'Return Policy'
	),
	array(
		'name' => 'footer-trademark',
		'string' => 'Osmo™, Awbie™, and Tangible Play™ are trademarks of Tangible Play, Inc.'
	),
	array(
		'name' => 'footer-disney',
		'string' => 'Mickey Mouse and Friends and Disney Princess ©Disney. The Incredibles 2 ©Disney/Pixar.'
	),
	array(
		'name' => 'lang-modal-title',
		'string' => 'Select a language'
	),
	array(
		'name' => 'lang-modal-text',
		'string' => 'Select website language'
	),
);

if ($strings && function_exists('pll_register_string')) {
	foreach ($strings as $string) {
		pll_register_string($string['name'], $string['string']);
	}
}
