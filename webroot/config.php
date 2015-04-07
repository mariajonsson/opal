<?php
/**
 * Config-file for Opal. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Opal paths.
 *
 */
define('OPAL_INSTALL_PATH', __DIR__ . '/..');
define('OPAL_THEME_PATH', OPAL_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(OPAL_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Opal variable.
 *
 */
$opal = array();
 
 
/**
 * Site wide settings.
 *
 */
$opal['lang']         = 'sv';
$opal['title_append'] = ' | Opal en webbtemplate';

/**
 * Theme related settings.
 *
 */
$opal['stylesheets'] = array('css/style.css');
$opal['favicon']    = 'favicon.ico';

/**
 * Settings for JavaScript.
 *
 */
$opal['modernizr'] = 'js/modernizr.js';

$opal['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$opal['jquery'] = null; // To disable jQuery

$opal['javascript_include'] = array();
//$opal['javascript_include'] = array('js/main.js'); // To add extra javascript files

/**
 * Google analytics.
 *
 */
$opal['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics