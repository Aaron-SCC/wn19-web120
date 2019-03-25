<?php
// config.php


//echo basename($_SERVER['PHP_SELF']);

// CONSTANT
define('THIS_PAGE', basename($_SERVER['PHP_SELF']) );

// reCAPTHA credentials here
// reCAPTHA credentials here
// reCAPTHA credentials here


//echo THIS_PAGE;


//die;


$title = THIS_PAGE;

switch(THIS_PAGE)
{
    case 'index.php':
        $title = ' Aaron\'s Home Page! ';
    break;

    case 'contactme.php':
        $title = ' Aaron\'s Contact Page! ';
    break;


}


?>