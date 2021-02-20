<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;
use Alert;

class CommentController extends Controller
{
    public function buatKomentar(Request $request, Post $post)
    {
        $comment = new Comment;
        $comment->comment = $request->comment;
        $comment->user_id = auth()->user()->id;

        $post->comments()->save($comment);
        alert()->success('Kamu Berhasil Berkomentar :)', 'Terimakasih');
        return back()->with('sukses','komentar telah dikirim..!!');
    }
}
