<?php

$query = require "bootstrap.php";

$articles = $query->selectAll('articles');

require "article.php";