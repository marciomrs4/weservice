<?php

include_once '../vendor/autoload.php';

$app = new \Slim\Slim();

$auth = new weverest\weservice\Authorization();


$app->get('/',function()use($auth,$app){

    $secret = $app->request()->headers('Authorization');

    echo json_encode($auth->validateSecret($secret));
});


$app->post('/auth/:secret',function($secret)use($auth){

    echo json_encode($auth->validateSecret($secret));

});

$app->response->headers->set('Content-Type', 'application/json');
//$app->response()->headers()->set('Authorization', 'Bearer '.'token-gerado');
$app->run();