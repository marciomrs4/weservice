<?php

include_once '../vendor/autoload.php';


//$app = new \Slim\Slim();

/*$app = new Auth();

$config[''];

$app->post('/authentication/:secret','token')->getJson()
    ->setService($confi)
    ->getJson
    ->run();*/


$app = new \Slim\Slim();

$auth = new weverest\weservice\Auth();


$app->get('/',function()use($auth,$app){

    $secret = $app->request()->headers('Content-Type');

    //$secret = 'TESTE';
    echo json_encode($auth->validateSecret($secret));
});

$app->response->headers->set('Content-Type', 'application/json');
$app->response()->headers()->set('Authorization', 'Bearer '.'token-gerado');
$app->run();



/*$app = new \Slim\Slim();


$app->get('/', function(){

    echo 'Hi';

});

//$app->response->headers->set('Content-Type', 'application/json');

$app->run();*/
