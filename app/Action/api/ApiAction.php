<?php
namespace App\Action\Api;

use \App\Action\Action as Action;
final class ApiAction extends Action{


  public function index($request, $response){
    $data = array('name' => 'Bob', 'age' => 40);
    return $response->withJson($data);
  }





}
