<?php

require "bootstrap.php";

use App\core\Router;
use App\core\Request;

$router = new Router();

$uri = Request::url();

require "app/routes.php";

$file = $router->direct($uri);

// $router->load()
// $articles = $query->selectAll('articles');

// require "article.php";

