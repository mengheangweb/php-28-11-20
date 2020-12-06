<?php
require "function.php";

Class Articals {
    
    public $id;
    public $title = "";
    public $body = ""; // 1
    public $published = true;

    public function __construct($arg1 = null){ //  2
       $this->body = $arg1;
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

$artical = new Articals(); // 3

$artical->title = "This is title 1";
$artical->body = "this is manually edit body"; // 4

// $body = $artical->body;

// $published = $artical->isPublished();


require "artical.php";