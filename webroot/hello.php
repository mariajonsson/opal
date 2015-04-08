<?php 
/**
 * This is an Opal pagecontroller.
 *
 */
// Include the essential config-file which also creates the $opal variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Opal container.
$opal['title'] = "Hello World";
 
$opal['header'] = <<<EOD
<img class='sitelogo' src='img/opal.png' alt='Opal Logo'/>
<span class='sitetitle'>Opal webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 
$opal['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Opal ser ut och fungerar.</p>
EOD;
 
$opal['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Maria Jonsson | <a href='https://github.com/mariajonsson/opal'>Opal på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of Opal.
include(OPAL_THEME_PATH);