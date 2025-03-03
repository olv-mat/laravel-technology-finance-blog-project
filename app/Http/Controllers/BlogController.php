<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $featuredArticle = Article::latest()->first();
        $articles = Article::all();
        
        return view("blog.index", [
            "featuredArticle" => $featuredArticle,
            "articles" => $articles,
        ]);
    }
}
