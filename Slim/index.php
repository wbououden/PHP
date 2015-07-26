<?php
/**
 * Created by PhpStorm.
 * User: lina
 * Date: 17.05.15
 * Time: 21:31
 */

require 'class/Slim/Slim.php';
\Slim\Slim::registerAutoloader();


$app = new \Slim\Slim(array(
    'templates.path' => './templates'
));

$app->get('/', function() use ($app){
   $app->render('homepage.php');
    //return true;
});

$app->get('/contact/:name', function($name) use ($app){
    $app->render('contact.php');
});

$app->render('header.php');
$app->run();
$app->render('footer.php');