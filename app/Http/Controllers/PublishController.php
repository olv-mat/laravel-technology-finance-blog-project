<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\PublishRequest;
use Illuminate\Support\Str;

class PublishController extends Controller
{
    public function index()
    {
        return view("publish.index");
    }

    public function store(PublishRequest $request)
    {
        $requestArray = $request->all();
        $path = $request->file("cover")->store("covers", "public");
        $fullPath = "storage/" . $path;
        $requestArray["cover"] = $fullPath;
        $requestArray["slug"] = Str::of($request->title)->slug('-');
        $article = Article::create($requestArray);
        return to_route("blog.index");
    }
}
