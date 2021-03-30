<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Author;


class PostController extends Controller
{
    public function index(){

        $posts= Post::all();

        return view('posts.index-post', compact('posts'));
    }


    public function show(Post $posts){


    }


    public function create(){

        $authors = Author::all();

        return view('posts.create',compact('authors'));




    }



    public function store(Request $request){

        $data = $request->all();

        $newPost= new Post();
        $newPost->fill($data);
        $newPost->save();


        return redirect()->route('posts.index');
    }
}
