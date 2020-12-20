<?php
$routes = [
    '' => 'index.php',
    'article' => 'Article@index',
    'about' => 'about.php',
    'contact' => 'Contact@index',
    'contact-submit' => 'Contact@add',
    'career' => 'career.php'
];

$router->define($routes);

// return $routes;