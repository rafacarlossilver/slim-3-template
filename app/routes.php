<?php

//Administracao
$app->get('/','App\Action\admin\HomeAction:index');



//API
$app->get('/api','App\Action\api\ApiAction:index');
