<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        $featuredArticle = Article::latest()->first();
        $articles = Article::all();
        
        return view("blog", [
            "featuredArticle" => $featuredArticle,
            "articles" => $articles,
        ]);
    }
}
