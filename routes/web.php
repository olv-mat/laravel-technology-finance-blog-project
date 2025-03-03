<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AboutController,
    ArticleController,
    BlogController,
    LoginController,
    PublishController,
    RegisterController,
};

Route::get("/", function () {
    return redirect("/blog");
});

Route::resource("about", AboutController::class)->only(["index"]);
Route::get("articles/{slug}", [ArticleController::class, "show"])->name("article.show");
Route::resource("blog", BlogController::class)->only(["index"]);
Route::resource("login", LoginController::class)->only(["index"]);
Route::resource("publish", PublishController::class)->only(["index", "store"]);
Route::resource("register", RegisterController::class)->only(["index"]);
