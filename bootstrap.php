<?php

require "function.php";
require "database/connection.php";
require "database/query.php";
$config = require "config.php";

$con = Connection::make($config);

$query = new Query($con);

return $query;