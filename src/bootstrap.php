<?php
/**
 * Bootstrapping functions, essential and needed for Opal to work together with some common helpers. 
 *
 */
 
/**
 * Default exception handler.
 *
 */
function myExceptionHandler($exception) {
  echo "Opal: Uncaught exception: <p>" . $exception->getMessage() . "</p><pre>" . $exception->getTraceAsString(), "</pre>";
}
set_exception_handler('myExceptionHandler');

/**
 * Dumpp all contents of a variable.
 *
 * @param mixed $array as the variable/array/object to dump.
 */
function dump($array) {
  echo "<pre>" . htmlentities(print_r($array, 1)) . "</pre>";
}


function isFourDigitNumber($string) {
  $fourdigit = strlen($string)==4?true:false;
  $numeric = is_numeric($string)?true:false;
  
  if($fourdigit && $numeric) {
    return true;
  }
}

/**
 * Create a slug of a string, to be used as url.
 *
 * @param string $str the string to format as slug.
 * @returns str the formatted slug. 
 */
function slugify($str) {
  $str = str_replace(array('å','ä','ö','Å','Ä','Ö'), array('a','a','o','A','A','O'), $str);
  $str = mb_strtolower(trim($str));
  $str = preg_replace('/[^a-z0-9-]/', '-', $str);
  $str = trim(preg_replace('/-+/', '-', $str), '-');
  return $str;
}

 
 
/**
 * Autoloader for classes.
 *
 */
function myAutoloader($class) {
  $path = OPAL_INSTALL_PATH . "/src/{$class}/{$class}.php";
  if(is_file($path)) {
    include($path);
  }
  else {
    throw new Exception("Classfile '{$class}' does not exists.");
  }
}
spl_autoload_register('myAutoloader');

