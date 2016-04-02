<?php
/**
 * This is a Triton pagecontroller.
 *
 */
// Include the essential config-file which also creates the $triton variable with its defaults.
include(__DIR__.'/config.php');


// Define what to include to make the plugin to work
$triton['stylesheets'][]        = 'css/slideshow.css';
$triton['jquery']               = true;
$triton['javascript_include'][] = 'js/slideshow.js';


// Do it and store it all in variables in the Triton container.
$triton['title'] = "Om mig";

$triton['main'] = <<<EOD
<div id="slideshow" class='slideshow' data-host="" data-path="img/slideshow/" data-images='["01.jpg", "02.jpg", "03.jpg", "04.jpg", "05.jpg"]'>
<img src='img/slideshow/01.jpg' width='950' height='180' alt='Slideshow'/>
</div>

<article class="readable">
<h1>Om Mig</h1>

<p class="lead">Välkommen till min Me-sida i kursen Databaser och Objektorienterad PHP-programmering (oophp)</p>

<p>Jag heter Anton Persson och bor just nu i Eslöv. Är född i Stockholm men är uppvuxen på Österlen.</p>

<p>Har tidigare i livet pluggat till högskoleingenjör inom multimediateknik i Helsingborg och som 3d-artist inom spelgrafik i Karlshamn.</p>

<p>Driver en egen firma sedan flera år tillbaka och jobbar med webbdesign/programmering, grafisk design och 3d-modellering/visualisering bland annat. Gillar att pröva på och lära mig nya saker, tackar aldrig nej till en spännande utmaning.</p>

<p>Jag har jobbat ganska länge med webbdesign där jag främst skapat hemsidor i WordPress till olika kunder. Eftersom jag mestadels jobbat med designbiten och kodat mycket HTML/CSS (även lite PHP men mest WordPress-API) vill jag via denna kurs utveckla och fördjupa mig mer inom PHP och JavaScript.</p>

<p>På den lilla fritid jag har tycker jag om att träffa min familj och vänner, läsa böcker, se schyssta tv-serier och hålla på med digital skulptur.</p>

{$triton['byline']}

</article>

EOD;


// Finally, leave it all to the rendering phase of Triton.
include(TRITON_THEME_PATH);
