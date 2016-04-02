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

$triton['header'] = <<<EOD
<img class='sitelogo' src='img/logo.png' alt='Triton Logo'/>
<span class='sitetitle'>Triton Webbmall</span>
<span class='siteslogan'>Me-sida för Anton Persson i kursen OOPHP</span>
EOD;

$triton['footer'] = <<<HTML
<footer><span class='sitefooter'>Copyright &copy; 2016 Anton Persson (<a href="mailto:anton.persson@outlook.com">anton.persson@outlook.com</a>) <a class="btn btn-success" href='https://github.com/anton-persson/triton'>Triton på GitHub</a> <a class="btn btn-primary" href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn Validator</a></span></footer>
HTML;

$triton['byline'] = <<<EOD
<footer class="byline clearfix">
    <img src="img/me.jpg" class="img-responsive img-circle pull-left" alt="Bild på Anton">
    <h3>Anton Persson</h3>
    <p>Pluggar webbprogrammering på BTH, driver samtidigt en egen firma och jobbar med webbdesign, grafisk design och 3d-modellering/visualisering.</p>
</footer>
EOD;

/**
 * The navbar
 *
 */
//$triton['navbar'] = null; // To skip the navbar
$triton['navbar'] = array(
  'class' => 'navbar navbar-default',
  'items' => array(
    'hem'         => array('text'=>'Hem',         'url'=>'me.php',          'title' => 'Min presentation om mig själv'),
    'redovisning' => array('text'=>'Redovisning', 'url'=>'redovisning.php', 'title' => 'Redovisningar för kursmomenten'),
    'kallkod'     => array('text'=>'Källkod',     'url'=>'source.php',      'title' => 'Se källkoden'),
  ),
  'callback' => function($url) {
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
      return true;
    }
  }
);


/**
 * Theme related settings.
 *
 */
//$triton['stylesheet'] = 'css/style.css';
$triton['stylesheets'] = array('css/style.css');
$triton['favicon']    = 'favicon.ico';

/**
 * Settings for JavaScript.
 *
 */
$triton['modernizr'] = 'js/modernizr.js';
$triton['jquery_incl'] = 'https://code.jquery.com/jquery-2.2.2.min.js';
//$triton['jquery'] = null; // To disable jQuery
$triton['javascript_include'] = array();
//$triton['javascript_include'] = array('js/main.js'); // To add extra javascript files
//$triton['javascript_include'] = array('js/other.js'); // To add extra javascript files


/**
 * Google Analytics.
 *
 */
$triton['google_analytics'] = 'UA-22093351-1'; // Set to null to disable Google Analytics
