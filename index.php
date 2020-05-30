<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Exception\NotFoundException;

require_once('vendor/autoload.php');

$app = AppFactory::create();

//Inicio do codigo para erro 404
$errorMiddleware = $app->addErrorMiddleware(true, true, true);

$errorMiddleware->setErrorHandler(\Slim\Exception\HttpNotFoundException::class, function (
    \Psr\Http\Message\ServerRequestInterface $request,
    \Throwable $exception,
    bool $displayErrorDetails,
    bool $logErrors,
    bool $logErrorDetails
) {
    $response = new \Slim\Psr7\Response();
    
    echo"Pagina nao encontrada";

    return $response->withStatus(404);
});
//Final do codigo para erro 404

require_once('home.php');
require_once('about.php');
require_once('services.php');
require_once('portifolio2.php');
require_once('pricing.php');
require_once('blog2.php');
require_once('contact.php');
require_once('admin2.php'); 
require_once('admin-about.php'); 
require_once('admin-services.php'); 
require_once('admin-pricing.php'); 
require_once('admin-contact.php'); 

$app->run();