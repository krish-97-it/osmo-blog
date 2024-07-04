<?php

class SetupTimber extends \Timber\Site
{
	/** Add timber support. */
	public function __construct()
	{
		add_filter('timber/context', array($this, 'addToContext'));
		add_filter('timber/twig', array($this, 'addToTwig'));
		parent::__construct();
	}

	/** This is where you add some context
	 *
	 * @param string $context context['this'] Being the Twig's {{ this }}.
	 */
	function addToContext($context)
	{
		$argsForPopularPosts = array(
			'post_type'       => 'post',
			'meta_key'        => 'post_views_count',
			'orderby'         => 'meta_value_num',
			'order'           => 'DESC',
			'posts_per_page'  => 3
		);
		$argsForLatestPosts = array(
			'post_type'       => 'post',
			'posts_per_page'  => 3
		);

		$context['site'] = $this;
		$context['selected_category'] = get_category(get_query_var('cat'));
		$context['categories'] = \Timber::get_terms('category');
		$context['options'] = get_fields('options');
		$context['popular_posts'] = \Timber::get_posts($argsForPopularPosts);
		$context['latest_posts'] = \Timber::get_posts($argsForLatestPosts);
		$context['langs'] = pll_the_languages(array('raw' => 1));

		if (function_exists('pll_current_language')) {
			$context['lang'] = pll_current_language();
			$context['lang_name'] = pll_current_language('name');
			$context['lang_locale'] = pll_current_language('locale');
		}

		return $context;
	}

	/** This is where you can add your own functions to twig.
	 *
	 * @param string $twig get extension.
	 */
	function addToTwig($twig)
	{
		$twig->addExtension(new \Twig_Extension_StringLoader());

		// Switch between pll__ and _e depending if polylang is activated
		if (function_exists('pll__')) {
			$twig->addFunction(new Timber\Twig_Function('pll__', 'pll__'));
		} else {
			$twig->addFunction(new Timber\Twig_Function('pll__', '_e'));
		}

		return $twig;
	}
}
