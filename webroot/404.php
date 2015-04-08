<?php 
/**
 * This is an Opal pagecontroller.
 *
 */
// Include the essential config-file which also creates the $opal variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Opal container.
$opal['title'] = "404";
$opal['header'] = "";
$opal['main'] = "This is an Opal 404. Document is not here.";
$opal['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
 
// Finally, leave it all to the rendering phase of Opal.
include(OPAL_THEME_PATH);