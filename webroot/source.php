<?php
/**
 * This is a Triton pagecontroller.
 *
 */
// Include the essential config-file which also creates the $triton variable with its defaults.
include(__DIR__.'/config.php');


// Add style for csource
$triton['stylesheets'][] = 'css/source.css';


// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));


// Do it and store it all in variables in the Triton container.
$triton['title'] = "Visa källkod";

$triton['main'] = "<h1>Visa källkod</h1>\n" . $source->View();


// Finally, leave it all to the rendering phase of Triton.
include(TRITON_THEME_PATH);
