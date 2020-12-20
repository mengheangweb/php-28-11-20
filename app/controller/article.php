<?php
namespace App\Controller;

use App\core\App;

class Article {
    public function index()
    {
        $articles = App::get('query')->selectAll('articles');

        return view('article', [
            'articles' => $articles
        ]);
    }
}

