<?php
/*
    Names: Aaron Utterback, Ruslan Bessarab
    Date: January 29th, 2021
    File: index.php
*/

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//Define a default route (home page)
$f3->route('GET /', function () {
    echo "My pets";
    //$view = new Template();
    //echo $view->render('views/home.html');
});

$f3->run();
