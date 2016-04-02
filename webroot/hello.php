<?php
/**
* This is a Triton page controller.
*
*/
// Include the essential config-file which also creates the $triton variable with its defaults.
include(__DIR__.'/config.php');

// Store the HTML-data in the Triton container.
$triton['title'] = "Hello World";

$triton['main'] = <<<HTML
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Triton ser ut och fungerar.</p>
HTML;

// Finally, leave it all to the rendering phase of Triton.
include(TRITON_THEME_PATH);
