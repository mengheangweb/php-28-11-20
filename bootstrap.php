<?php

use App\core\App;

require "core/function.php";

require "vendor/autoload.php";

App::bind('config', require "config.php");

$config = App::get('config');

App::bind('con', Connection::make($config));

$con = App::get('con');

App::bind('query', new Query($con));

// return $query;