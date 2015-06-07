<?php 
/**
 * This is an Opal pagecontroller.
 *
 */
// Include the essential config-file which also creates the $opal variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Opal container.
$opal['title'] = "Hello World";
$opal['bodyid'] = 'hello';

 
$opal['main'] = <<<EOD
<h1>Hello World</h1>
<p>This is an Opal example page.</p>
EOD;
 
 
 
// Finally, leave it all to the rendering phase of Opal.
include(OPAL_THEME_PATH);