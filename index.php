<?php
error_reporting(E_ALL | E_STRICT);
ini_set('display_errors','On');


require 'vendor/autoload.php';
require 'config/constants.php';
require 'config/config.php';
$app = new \Slim\App(['settings' => $config]);
include_once "container.php";
include_once"app/routes.php";

$app->run();
