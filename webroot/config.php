<?php
/**
 * Config-file for Opal. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Opal paths.
 *
 */
define('OPAL_INSTALL_PATH', __DIR__ . '/..');
define('OPAL_THEME_PATH', OPAL_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(OPAL_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Opal variable.
 *
 */
$opal = array();

/**
 * Settings for the database.
 *
 */
$opal['database']['dsn']            = '';
$opal['database']['username']       = '';
$opal['database']['password']       = '';
$opal['database']['driver_options'] = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'");
 
/**
 * Site wide settings.
 *
 */
$opal['lang']         = 'sv';
$opal['title_append'] = ' | Opal en webbtemplate';

$opal['header'] = <<<EOD
<img class='sitelogo' src='img/opal.png' alt='Opal Logo'/>
<span class='sitetitle'>Opal</span>
<span class='siteslogan'>web template in php</span>
EOD;
$opal['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Maria Jonsson | <a href='https://github.com/mariajonsson/opal'>Opal på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

/**
 * Admin navbar
 *
 */
//$opal['adminbar'] = null; // To skip the navbar

if (isset($_SESSION['user'])) {
  if($_SESSION['user']->userrole=="admin") {
/**
 * Define the menu as an array
 */
$opal['adminbar'] = array(
  // Use for styling the menu
  'class' => 'adminbar',
 
  // Here comes the menu strcture
  'items' => array(
  
  // This is a menu item
     'admin'  => array(
      'text'  => 'Admin',   
      'url'   => 'admin.php',  
       'title' => 'Admin page'
        ),
  

  
  ),
  

 
  // This is the callback tracing the current selected menu item base on scriptname
  'callback' => function($url) {
  
  //Modified
  if(basename($_SERVER['REQUEST_URI']) == $url) {
      return true;
    }

  }
);

  }
   
 }
 else {
  $opal['adminbar']=null;
 }


/**
 * The navbar
 *
 */
//$opal['navbar'] = null; // To skip the navbar


/**
 * Define the menu as an array
 */
$opal['navbar'] = array(
  // Use for styling the menu
  'class' => 'navbar',
 
  // Here comes the menu strcture
  'items' => array(
  
    // This is a menu item
    'hello'  => array(
      'text'  =>'Hello',   
      'url'   =>'hello.php',  
      'title' => 'Hello page'
    ),

   
      
     
     
  ),
  

 
  // This is the callback tracing the current selected menu item base on scriptname
  'callback' => function($url) {

  
  //Modified
  if(basename($_SERVER['REQUEST_URI']) == $url) {
      return true;
    }

  
  // Original version
  /*if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
      return true;
    } */
     //This is to match only the first part of the name
    /* if (contains_substr($url, basename($_SERVER['SCRIPT_FILENAME']), 0)) {
      return true; 
    } */
  }
);


/**
 * Theme related settings.
 *
 */
$opal['stylesheets'] = array('css/style.css','css/source.css','css/figure.css');
$opal['favicon']    = 'favicon.ico';

/**
 * Settings for JavaScript.
 *
 */
$opal['modernizr'] = 'js/modernizr.js';

$opal['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$opal['jquery'] = null; // To disable jQuery

$opal['javascript_include'] = array();
//$opal['javascript_include'] = array('js/main.js'); // To add extra javascript files

/**
 * Google analytics.
 *
 */
$opal['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics