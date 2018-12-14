<?php
/*
@author Rafael Silverio
*/
//Configura��o para PDO

$config['displayErrorDetails'] = true;
$config['addContentLengthHeader'] = false;

$config['db']['host']   = '';
$config['db']['user']   = 'root';
$config['db']['pass']   = '';
$config['db']['dbname'] = '';


//Configura��o para Eloquent
$config =  [
    'settings' => [
        // Slim Settings
        'determineRouteBeforeAppMiddleware' => false,
        'displayErrorDetails' => true,
        'db' => [
            'driver' => 'mysql',
            'host' => '',
            'database' => '',
            'username' => 'root',
            'password' => 'root',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
    ],
];
