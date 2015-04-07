<?php 
/**
 * This is an Opal pagecontroller.
 *
 */
// Include the essential config-file which also creates the $opal variable with its defaults.
include(__DIR__.'/config.php'); 
 
// Add style for csource
$opal['stylesheets'][] = 'css/source.css';
 
// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));
 


// Do it and store it all in variables in the Opal container.
$opal['title'] = "Visa källkod";

 
$opal['header'] = <<<EOD
<img class='sitelogo' src='img/opal.png' alt='Opal Logo'/>
<span class='sitetitle'>Opal webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;
 
$opal['main'] = "<h1>Visa källkod</h1>\n" . $source->View(); 
 
$opal['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Maria Jonsson | <a href='https://github.com/mariajonsson/opal'>Opal på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of Anax.
include(OPAL_THEME_PATH);