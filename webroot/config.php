<?php
/**
 * Config-file for Triton. Change settings here to affect installation.
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
 * Define Triton paths.
 *
 */
define('TRITON_INSTALL_PATH', __DIR__ . '/..');
define('TRITON_THEME_PATH', TRITON_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(TRITON_INSTALL_PATH . '/src/bootstrap.php');

/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();


/**
 * Create the Triton variable.
 *
 */
$triton = array();


/**
 * Site wide settings.
 *
 */
$triton['lang']         = 'sv';
$triton['title_append'] = ' | Triton en webbtemplate';
//$triton['stylesheet'] = 'css/style.css';
$triton['stylesheets'] = array('css/style.css');
$triton['favicon']    = 'favicon.ico';
$triton['modernizr'] = 'js/modernizr.js';

/**
 * Settings for JavaScript.
 *
 */
$triton['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js';
//$triton['jquery'] = null; // To disable jQuery
$triton['javascript_include'] = array();
// Add js/main.js for inklusion
$triton['javascript_include'][] = 'js/main.js';
$triton['javascript_include'][] = 'js/other.js';


/**
 * Google Analytics.
 *
 */
$triton['google_analytics'] = 'UA-22093351-1'; // Set to null to disable Google Analytics
