<?php

namespace App\Http\Controllers;

use App\Models\{
    Article,
    Comment,
};
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show(string $slug) {

        $article = Article::where("slug", $slug)->with("comments")->firstOrFail();
        return view("article", [
            "article" => $article,
        ]);

    }

    public function store(Request $request)
    {
        Comment::create($request->all());
        return redirect()->back();
    }
}
