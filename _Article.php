<?php
require "function.php";

Class Articles {

    public $id;
    public $title = "";
    public $body = ""; // 1
    public $published = true;

    public function __construct($arg1 = null, $arg2 = null){ //  2
       $this->body = $arg1;
       $this->title = $arg2;
    }

    public function fullTitle()
    {
        return "{$this->id} - {$this->title}";
    }

    public function isPublished()
    {
        if($this->published) {
            return "published";
        }else{
            return "Not yet Published";
        }

    }
}

$articles = [
    new Articles("Body 1", "Title 1"),
    new Articles("Body 2"),
    new Articles("body 3"),
    new Articles("body 4"),
]; // 3

// dd($articles);

// $articles->title = "This is title 1";
// $articles->body = "this is manually edit body"; // 4

// $body = $articles->body;

// $published = $articles->isPublished();

// dd($articles);

require "articles.php";