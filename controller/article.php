<?php

// working with database
$articles = $query->selectAll('articles');

return require "view/article.php";