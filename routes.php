<?php
$routes = [
    '' => 'controller/index.php',
    'article' => 'controller/article.php',
    'about' => 'controller/about.php',
    'contact' => 'controller/contact.php',
    'contact-submit' => 'controller/contact.php',
    'career' => 'controller/career.php'
];

$router->define($routes);

// return $routes;