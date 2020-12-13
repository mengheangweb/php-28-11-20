<?php

require "core/function.php";
require "core/router.php";
require "core/database/connection.php";
require "core/database/query.php";
require "core/request.php";

$config = require "config.php";

$con = Connection::make($config);

$query = new Query($con);

return $query;