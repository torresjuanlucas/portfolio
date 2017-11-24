<?php
//------------------------ log info------------------------------
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
session_start();
require_once 'vendor/autoload.php';

// Slim creation and setup
$app = new \Slim\Slim(array(
    'view' => new \Slim\Views\Twig()
        ));
$view = $app->view();
$view->parserOptions = array(
    'debug' => true,
    'cache' => dirname(__FILE__) . '/cache'
);

//eventhandlers:
//$app->get('/', function() use ($app) {
//    echo "jjjjjjjjjjjjjjjjjj";
//});

$app->get('/', function() use ($app) {
      $app->render('index.html.twig');
 });
 
$app->run();