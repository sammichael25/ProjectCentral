<?php
require 'vendor/autoload.php';
include 'lib.php';

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


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
    return $this->view->render($response, "/index.phtml");
});

$app->get('/guest', function (Request $request, Response $response) {
    return $this->view->render($response, "/projects.php");
});

$app->get('/projects/load', function (Request $request, Response $response) {
    return $this->view->render($response, "/projects.php");
});

$app->post("/login", function (Request $request, Response $response){
	$post = $request->getParsedBody();
	$email = $post['email'];
	$password = $post['password'];
	
	$res = checkLogin($email, $password);
	if ($res === true){
		$response = $response->withStatus(201);
		$response = $response->withJson(201);
	} else{
		$response = $response->withJson(400);
	}
	return $response;
});


$app->post("/signup", function(Request $request, Response $response){
	$post = $request->getParsedBody();
	$email = $post['email'];
	$fname = $post['fname'];
	$lname = $post['lname'];
	$password = $post['password'];
	$password2 = $post['password2'];
	$role = $post['role'];
	if ($password === $password2){
	$res = saveUser($email,$fname, $lname, $password, $role);
	}
	if ($res){
		$response = $response->withStatus(201);
		header('Content-Type: application/x-www-form-urlencoded');
		return $this->view->render($response, "/projects.php");
	} else {
		$response = $response->withStatus(400);
	}
	return $response;
});

$app->get('/admin', function (Request $request, Response $response) {
    return $this->view->render($response, "/studentAdmin.php");
});

$app->get("/projects", function(Request $request, Response $response){
	$projects = getProjects();	
	header('Content-Type: application/x-www-form-urlencoded');
	$response = $response->withJson($projects);
	return $response;
	//return $this->view->render($response, "/projects.php");

});

// Run app
$app->run();