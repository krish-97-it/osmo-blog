<?php

require_once(dirname(__FILE__) . '/initializeTimber.php');
require_once(dirname(__FILE__) . '/configYoast.php');
require_once(dirname(__FILE__) . '/helpers.php');
require_once(dirname(__FILE__) . '/strings.php');

// Core

require_once(dirname(__FILE__) . '/Core/BaseTheme.php');
require_once(dirname(__FILE__) . '/Core/OptionsPage.php');
require_once(dirname(__FILE__) . '/Core/SetupTheme.php');
require_once(dirname(__FILE__) . '/Core/SetupTimber.php');

// Allow all users with edit_posts permission to access the Permissions plugin
add_filter('redirection_role', function( $role ) {
    return 'edit_posts';
} );

// add_filter( 'wpforms_is_amp', '__return_true' );

$app = array();

new BaseTheme();
new SetupTheme();
new SetupTimber();
new OptionsPage();
