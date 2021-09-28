<?php

require '_init.php';
use App\Core\Request;
use App\Core\Router;
use App\Database\{
   QueryBuilder,
   DBConnection
};
use App\Controllers\{
   BasketController,
   ProjectController
};
use App\App;

/* 
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. 
|
*/

App::set('config', require 'config.php');
QueryBuilder::make(
   DBConnection::make(App::get('config')['database'])
);

Router::make()
   ->get('',                [ProjectController::class, 'index'])
   ->get('show',            [ProjectController::class, 'show'])
   ->get('edit',            [ProjectController::class, 'edit'])
   ->get('request',         [BasketController::class, 'requestProduct'])
   ->get('admin',           [ProjectController::class,'admin'])
   ->post('update',         [ProjectController::class, 'update'])
   ->get('delete',          [ProjectController::class, 'destroy'])
   ->post('project/create', [ProjectController::class, 'create'])
   ->post('send',           [BasketController::class, 'send'])
   ->resolve(
      Request::uri(), 
      Request::method()
   );
