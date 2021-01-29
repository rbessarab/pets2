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
    $view = new Template();
    echo $view->render('views/home.html');
});

//order1 page
$f3->route('GET /order', function () {
    $view = new Template();
    echo $view->render('views/pet-order.html');
});

//order2 page
$f3->route('POST /order2', function () {
    var_dump($_POST);
    $view = new Template();
    echo $view->render('views/pet-order2.html');
});

//summary page
$f3->route('POST /summary', function () {
    var_dump($_POST);
    $view = new Template();
    echo $view->render('views/order-summary.html');
});

$f3->run();
