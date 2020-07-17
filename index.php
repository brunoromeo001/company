<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Exception\NotFoundException;

require_once('vendor/autoload.php');

$app = AppFactory::create();

require_once('home.php');
require_once('about.php');
require_once('services.php');
require_once('portifolio2.php');
require_once('pricing.php');
require_once('blog2.php');
require_once('contact.php');
require_once('admin2.php'); 
require_once('admin-home.php'); 
require_once('admin-about.php'); 
require_once('admin-services.php'); 
require_once('admin-portfolio.php'); 
require_once('admin-pricing.php'); 
require_once('admin-blog.php'); 
require_once('admin-contact.php'); 

$app->run();