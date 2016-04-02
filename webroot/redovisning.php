<?php
/**
 * This is a Triton pagecontroller.
 *
 */
// Include the essential config-file which also creates the $triton variable with its defaults.
include(__DIR__.'/config.php');


// Do it and store it all in variables in the Triton container.
$triton['title'] = "Redovisning";

$triton['main'] = <<<EOD
<article class="readable">
<h1>Redovisning av kursmomenten</h1>

<h2>Kmom01: Kom igång med Objektorienterad PHP</h2>

<p>Skriv redovisningstexten här om varje kursmoment. Samtliga texter på en och samma sida.</p>

<p>Läs om hur du skriver <a href="http://dbwebb.se/kunskap/att-skriva-en-bra-redovisningstext">en bra redovisningstext</a> och glöm inte att redovisningstexterna utgör en del i <a href="http://dbwebb.se/kurser/bedomning-och-betygsattning">bedömningen av kursen</a>.</p>

<p>Se till att göra både texter och me-sida till något som du kan vara stolt över.</p>


<h2>Kmom02: Objektorienterad programmering i PHP</h2>

<p>Redovisningstext...</p>


<h2>Kmom03: SQL och databasen MySQL</h2>

<p>Redovisningstext...</p>


<h2>Kmom04: PHP PDO och MySQL</h2>

<p>Redovisningstext...</p>


<h2>Kmom05: Lagra innehåll i databasen</h2>

<p>Redovisningstext...</p>


<h2>Kmom06: Bildbearbetning och galleri</h2>

<p>Redovisningstext...</p>


<h2>Kmom07/10: Projekt och examination</h2>

<p>Redovisningstext...</p>


{$triton['byline']}

</article>

EOD;


// Finally, leave it all to the rendering phase of Triton.
include(TRITON_THEME_PATH);
