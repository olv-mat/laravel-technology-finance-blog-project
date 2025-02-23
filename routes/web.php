<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PageController,
};

Route::get("/", [PageController::class, "index"]);
Route::get("/post", [PageController::class, "article"]);
Route::get("/about", [PageController::class, "about"]);
Route::get("/publish", [PageController::class, "publish"]);
Route::get("/login", [PageController::class, "login"]);
Route::get("/register", [PageController::class, "register"]);