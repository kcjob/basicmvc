<?php
require_once __DIR__.'/../vendor/autoload.php'; // Add the autoloading mechanism of Composer

$app = new Silex\Application(); // Create the Silex application, in which all configuration is going to go
$app['debug'] = true;

//------
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views' // The path to the views/templates,
));

//-------
/**
* @route()
*/
//$app->get('/', function(){
//  return 'Hello';});
//print_r(isset($_GET['m']));
//print_r(isset($_GET['a']));
if((!isset($_GET['m'])) and !isset($_GET['a']))
{
    $app->get('/', 'controllers\\DefaultController::greeting');
}

if($_GET['a'] == 'hello')
{
    $app->get('/', 'controllers\\GreetingsController::hello');
}

if($_GET['a'] == 'goodbye')
{
    $app->get('/', 'controllers\\GreetingsController::bye');
}

$app->run();
