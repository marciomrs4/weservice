<?php

include_once '../vendor/autoload.php';

$app = new \Slim\Slim();

//Rota com servico um
$ServiceOne = new app\ServiceOne\ServiceOne();
$app->get('/serviceone/:user_id',function($user_id) use ($ServiceOne, $app){

    $dados = $ServiceOne->setAcceptFromRoute(array('user_id'=>$user_id))
                        ->getService();

    echo json_encode($dados);
});

//Rota com servico 2
$ServiceTwo = new app\ServiceTwo\ServiceTwo();
$app->get('/servicetwo/:user_id',function($user_id)use($ServiceTwo){

    $dados = $ServiceTwo->setAcceptFromRoute(array('id'=>$user_id))
                        ->getService();

    echo json_encode($dados);
});

//Rota com get para token
$app->get('/',function()use($app){

    $token = $app->request()->headers('Authorization');

    echo json_encode(['token' => $token]);
});


//Rota para auth
$auth = new weverest\weservice\Authorization();
$app->post('/auth/:secret',function($secret)use($auth){

    echo json_encode($auth->validateSecret($secret));

});



$app->response->headers->set('Content-Type', 'application/json');
//$app->response()->headers()->set('Authorization', 'Bearer '.'token-gerado');
$app->run();