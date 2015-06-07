<?php 
/**
 * This is an Opal pagecontroller.
 *
 */
include(__DIR__.'/config.php');

// Define the basedir for the gallery
define('GALLERY_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'img');
define('GALLERY_BASEURL', '');

$gallery = new CGallery();

$showgallery = $gallery->readAndPresent();
 
// Do it and store it all in variables in the Opal container.
$opal['title'] = "Gallery";
 
 
$opal['main'] = <<<EOD
<h1>{$opal['title']}</h1>
$showgallery

EOD;

 
 
// Finally, leave it all to the rendering phase of Opal.
include(OPAL_THEME_PATH);