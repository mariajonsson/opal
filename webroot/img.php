<?php
/**
 * This is an Opal pagecontroller.
 *
 */
 
 //
// Ensure error reporting is on
//
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly

define('IMG_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR);
define('CACHE_PATH', __DIR__ . DIRECTORY_SEPARATOR . 'cache' . DIRECTORY_SEPARATOR);

include('../src/CImage/CImage.php');

$cimage = new CImage(2000);


$cimage->editAndShowImage();