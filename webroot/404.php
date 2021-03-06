<?php
/**
 * This is a Triton pagecontroller.
 *
 */
// Include the essential config-file which also creates the $triton variable with its defaults.
include(__DIR__.'/config.php');


// Do it and store it all in variables in the Triton container.
$triton['title'] = "404";
$triton['main'] = "<h2>This is a Triton 404. The page was not found.</h2>";

// Send the 404 header
header("HTTP/1.0 404 Not Found");


// Finally, leave it all to the rendering phase of Triton.
include(TRITON_THEME_PATH);
