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

<p><strong>Vilken utvecklingsmiljö använder du?</strong></br>
Jag använder samma utvecklingsmiljö som för htmlphp kursen. Windows 8.1, Atom, Cygwin, Git Bash, XAMPP, Firefox med Firebug och Creative Cloud. Tyckte den fungerade bra förra kursen så jag gör inga ändringar. Dock lite intresserad av att testa Sublime Text 2, kanske blir till nästa kurs. Har vant mig vid Cygwin och tycker det fungerar bra med kommandoraden.</p>

<p><strong>Berätta hur det gick att jobba igenom guiden “20 steg för att komma igång PHP”, var något nytt eller kan du det?</strong></br>
Denna guide gick jag igenom noggrant för htmlphp-kursen, så jag skummade endast igenom den för att friska upp minnet. Tyckte boken var väldigt bra och lärde mig flera nya saker när jag läste igenom de fem första kapitlen. Verkar vara en bra bok och trevligt att den finns som e-bok, tycker det är smidigare än fysiska böcker.</p>

<p><strong>Vad döpte du din webbmall Anax till?</strong></br>
Jag döpte min mall till Triton vilket är Neptunus största måne. Blev även därför även någon sorts rymd-tema på min me-sida.</p>

<p><strong>Vad anser du om strukturen i Anax, gjorde du några egna förbättringar eller något du hoppade över?</strong></br>
Strukturen i Anax var först lite svår att överblicka med alla filer och includes. Men när jag jobbat med min me-sida ett tag så förstod jag tankegången. Verkar vara ett bra system och en logisk uppdelning av klasser, funktioner och html-kod. Gjorde inga större förändringar, förde över header, footer och byline till configfilen. Valde att använda klassen för menyn, kodade här om så att funktionen endast krävde en variabel (array) som jag sedan delade sub-variabler upp med extract, en riktigt bra funktion. Valde även att jobba med Bootstrap för att snabba upp css-designfasen och fokusera mer på PHP denna kurs. Detta gör att CSSen ej validerar i Unicorn (min egna style.css validerar självklart), hoppas ni kan ha överseende med detta.</p>

<p><strong>Gick det bra att inkludera source.php? Gjorde du det som en modul i ditt Anax?</strong></br>
Source.php gick att inkludera utan problem, lade den som en modul i egen katalog så skötte autoloadern resten, smidigt! Guiden var enkel och logisk att följa.</p>

<p><strong>Gjorde du extrauppgiften med GitHub?</strong></br>
Jag har velat lära mig GitHub så denna uppgift var toppen. Skaffade ett konto och övade med att ladda upp både Triton och BMO.  GitHub var enkelt att hålla med när jag lärde mig kommandona och att man behöver köra ”add” innan ”commit” om man skapat nya filer. Git verkar väldigt smidigt, speciellt om man jobbar i team och skönt med inkrementell backup av all kod man lägger upp.</p>



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
