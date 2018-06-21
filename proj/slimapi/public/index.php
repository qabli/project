<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;

$app->get('/api/cars', function () {

	$json = file_get_contents("C:\Users\Simohammad\Downloads\cars.json");
	return $json;
});

$app->get('/api/cars/{name}', function (Request $request, Response $response) {

	$name = $request->getAttribute('name');
	$json = file_get_contents("C:\Users\Simohammad\Downloads\cars.json");
	$data = json_decode($json,true);
	$tab = 	array();
	foreach ($data as $key) {
		if(strstr($key['Name'],$name)){
			$tab[]=$key;
		}
	
	}
	return json_encode($tab);
});


$app->run();