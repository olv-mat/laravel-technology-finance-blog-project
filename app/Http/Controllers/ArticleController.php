<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show(string $slug) {

        $article = Article::where("slug", $slug)->firstOrFail();
        return view("article.index", [
            "article" => $article,
        ]);

    }
}
