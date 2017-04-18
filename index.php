<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';
include 'lib.php';
$config = [
		'settings' => [
				'displayErrorDetails' => true,
		]
];

// Create app
$app = new \Slim\App($config);

// Get container
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    return new \Slim\Views\PhpRenderer('templates/');
};

$app->get('/', function (Request $request, Response $response) {
    return $this->view->render($response, "/login.php");
});

$app->get('/guest', function (Request $request, Response $response) {
    return $this->view->render($response, "/projects.php");
});

$app->post("/login", function(Request $request, Response $response)use ($app){
	echo "hello world";
	/*$post = $request->getParsedBody();
	$email = $post['email'];
	$password = $post['password'];
	$res = checkLogin($email, $password);
	if ($res){
		$response = $response->withStatus(201);
		$response = $response->withJson(array("loginstatus"=> true));
	} else {
		$response = $response->withJson(400);
	}
	return $response;*/
});

// Run app
$app->run();