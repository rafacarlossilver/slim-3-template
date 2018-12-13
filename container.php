<?php
/*
@author Rafael Silverio
*/


#$container = $app->Container();


// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('resources/views/');

    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};



//$container['view'] = new \Slim\Views\PhpRenderer('resources/views/');
