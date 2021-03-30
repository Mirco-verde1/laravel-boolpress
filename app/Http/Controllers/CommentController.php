<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentController extends Controller
{
    public function index(){

        $comments= Comment::all();
        $posts= Post::all();

        return view('posts.comment', compact('comments'));
    }
}
