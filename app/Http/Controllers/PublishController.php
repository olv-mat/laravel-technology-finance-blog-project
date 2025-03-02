<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublishController extends Controller
{
    public function index()
    {
        return view("publish.index");
    }
}
