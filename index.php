<?php

$query = require "bootstrap.php";

$router = new Router();

$uri = Request::url();

require "routes.php";

$file = $router->direct($uri);

require $file;

// $router->load()
// $articles = $query->selectAll('articles');

// require "article.php";

