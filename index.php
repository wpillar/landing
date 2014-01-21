<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim();

$app->get('/', function() {
    echo 'hello!';
});

$app->run();
