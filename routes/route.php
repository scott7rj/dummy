<?php
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use app\controller\LoginController as LoginController;

$app->get('/', function(Request $request, Response $response, $args) {
	return $this->view->render($response, 'init.twig');
});

$app->post('/login', function(Request $request, Response $response) {
	try {
		$controller = new LoginController();
		$array = $controller->autenticar($request, $response, array());
		print_r($array);
		return $this->view->render($response, '/index.twig', ['arr' => $array]);
	} catch (Exception $e) {
		throw new Exception($e->getMessage());
	}
});