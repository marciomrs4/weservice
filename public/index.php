<?php

include_once '../vendor/autoload.php';


$app = new \Slim\Slim();

$app->get('/', function(){
    echo 'Hi';
});

$app->response->headers->set('Content-Type', 'application/json');

$app->run();
