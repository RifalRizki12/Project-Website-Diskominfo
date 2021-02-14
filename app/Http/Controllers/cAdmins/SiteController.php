<?php

namespace App\Http\Controllers\cAdmins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;

class SiteController extends Controller
{
    public function blog()
    {
        $posts = Post::paginate(10);
        
        return view('vHomes.blog',compact(['posts']));
    }

    public function blogGird()
    {
        $posts = Post::paginate(9);
        return view('vHomes.blogGird',compact(['posts']));
    }

    public function singlepost($slug)
    {
        $post = Post::where('slug','=',$slug)->first();
        $posts = Category::all();
        return view('vHomes.blogSingle',compact(['post','posts']));
    }
}
