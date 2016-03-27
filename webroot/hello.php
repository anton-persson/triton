<?php
/**
* This is a Triton page controller.
*
*/
// Include the essential config-file which also creates the $triton variable with its defaults.
include(__DIR__.'/config.php');

// Store the HTML-data in the Triton container.
$triton['title'] = "Hello World";

$triton['header'] = <<<HTML
<img class='sitelogo' src='img/triton.png' alt='Triton Logo'/>
<span class='sitetitle'>Triton webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
HTML;

$triton['main'] = <<<HTML
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Triton ser ut och fungerar.</p>
HTML;

$triton['footer'] = <<<HTML
<footer><span class='sitefooter'>Copyright (c) 2016 Anton Persson (anton.persson@outlook.com) | <a href='https://github.com/anton-persson/triton'>Triton på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
HTML;


// Finally, leave it all to the rendering phase of Triton.
include(TRITON_THEME_PATH);
