<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        return view('vHomes.home');
    }

    public function blog()
    {
        return view('vHomes.blog');
    }

}
