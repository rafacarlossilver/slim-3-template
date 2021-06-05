<?php
ini_set('display_errors','Off');


require 'vendor/autoload.php';
require 'config/constants.php';
require 'config/config.php';


$container = new \Slim\Container($config);
$app = new \Slim\App($container);
include_once "container.php";
include_once "app/routes.php";

$app->run();

