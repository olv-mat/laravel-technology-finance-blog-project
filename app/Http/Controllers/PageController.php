<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class PageController extends Controller
{
    public function index()
    {
        return view("blog.index");
    }

    public function article()
    {
        return view("blog.article");
    }

    public function about()
    {
        return view("blog.about");
    }

    public function publish()
    {
        return view("blog.publish");
    }

    public function login()
    {
        return view("blog.login");
    }

    public function register()
    {
        return view("blog.register");
    }
}
