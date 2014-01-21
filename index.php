<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim(array(
    'templates.path' => './views'
));

/**
 * Special Routes
 */
$app->notFound(function () use ($app) {
    $app->render('404.html');
});


/**
 * Routes
 */
$app->get('/', function() use ($app) {
    $app->render('index.php');
});


/**
 * Hooks
 */
$app->hook('slim.before', function () use ($app) {
    $app->view()->appendData(array('baseUrl' => '../'));
});

$app->run();
