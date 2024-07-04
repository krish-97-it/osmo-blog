<?php

class OptionsPage {
	function __construct() {
		if( function_exists('acf_add_options_page') ) {
			acf_add_options_page(array(
				'page_title'	=> 'Options Page',
				'menu_title'	=> 'Options Page',
				'menu_slug'		=> 'theme-settings',
				'position'		=> '2.5',
				'redirect'		=> false
			));
		}
	}
}
