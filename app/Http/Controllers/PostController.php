<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Author;
use Illuminate\Support\Facades\Redirect;

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


//semplice controllo che l'id esista e non sia modificato

$author_id = $data['author_id'];

if(!Author::find($author_id)){

    return view('posts.error.error-page');
}


else{


    $newPost= new Post();
    $newPost->fill($data);
    $newPost->save();


    return redirect()->route('posts.index');

}




    }
}
