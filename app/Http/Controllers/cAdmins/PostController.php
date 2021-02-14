<?php

namespace App\Http\Controllers\cAdmins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\Tag;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('vAdmins.vPosts.index',compact(['posts']));
    }

    public function create()
    {
        $tags = Tag::all();
        $category = Category::all();
        return view('vAdmins.vPosts.addPost',compact(['category','tags']));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5',
            'content' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg'
        ]);
        
        $post = new Post;
        $post->title = $request->title;
        $post->slug = str_slug($post->title);
        $post->content = $request->content;
        $post->user_id = auth()->user()->id;
        $post->category_id = $request->category_id;
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/thumbnail');
            $file->move($destinationPath, $fileName);
            $post->thumbnail = $fileName;
        }
        $post->save();
        $post->tags()->sync($request->tags);
        
        return redirect('posts')->with('sukses','Post Baru Berhasil Dibuat');
    }

    public function edit($id)
    {
        $posts = Post::find($id);
        return view('vAdmins.vPosts.editPost',compact(['posts']));
    }

    public function update(Request $request,$id)
    {
        
        $post = Post::find($id);
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('posts');
    }

    public function delete($id)
    {
        $data = Post::where('id',$id)->first();

        $data->delete();
        return redirect()->back();
    }

}
