<?php

class SetupTheme {
	function __construct() {
		add_action( 'after_setup_theme', array($this, 'setThemeSupport') );
		add_action( 'wp_enqueue_scripts', array($this, 'addFiles') );
	}

	function addFiles() {
		wp_enqueue_style( 'main-css', CSS_URL . '/app.css' );
		// Disabled for AMP
		// wp_enqueue_script( 'main-js', JS_URL . '/main.js' );
	}

	/**
	 * Set theme support
	 * @link https://developer.wordpress.org/reference/functions/add_theme_support/
	 */
	function setThemeSupport() {
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'title-tag' );
			add_theme_support( 'post-thumbnails' );
			add_theme_support(
				'html5', array(
					'comment-form',
					'comment-list',
					'gallery',
					'caption',
				)
			);
			add_theme_support(
				'post-formats', array(
					'aside',
					'image',
					'video',
					'quote',
					'link',
					'gallery',
					'audio',
				)
			);
			add_theme_support( 'menus' );
	}
}
