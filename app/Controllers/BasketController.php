<?php

namespace App\Controllers;
use App\Core\Request;
use App\Database\QueryBuilder;
use App\Traits\ImageUploadTrait;

class BasketController
{
  public function send()
  {
    
    $data = [
      'full_name'     => $_POST['full_name'],
      'user_id'       => $_POST['user_id'],
      'category_id'   => $_POST['category_id'],
      'project_id'    => $_POST['project_id'],
      'number'        => $_POST['number'],
      'address'       => $_POST['category_id'],
      'city'          => $_POST['user_id'],
      'quantity'      => $_POST['quantity'],
    ];
    QueryBuilder::insert('baskets', $data);
    back();
  }
}