<?php
declare(strict_types=1);


use Tracy\Debugger;
use \NoahBuscher\Macaw\Macaw;

require 'vendor/autoload.php'; // альтернатива tracy.phar

Debugger::enable();

Macaw::get('/', 'App\FrontEndController@articleList');
Macaw::get('/pdo', 'App\ModelPDO@getAll');
Macaw::get('/article/(:num)', 'App\FrontEndController@singleArticle');
//Macaw::get('page', 'Controllers\demo@page');
//Macaw::get('view/(:num)', 'Controllers\demo@view');

Macaw::dispatch();



//error_reporting(E_ALL);
//ini_set('display_errors', 'on');
//include_once './forms/function.php';
//
//
//
//include 'template/frontend/partials/head.php';
//include 'template/frontend/partials/breadcrumbs.php';
//include 'template/frontend/partials/blog-list.php';
//include 'template/frontend/partials/footer.php';