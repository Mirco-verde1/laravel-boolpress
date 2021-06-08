<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\Author;
use App\Mail\PostCreated;
use App\Tag;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;


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


        $tags= Tag::all();

        return view('posts.create',compact('authors','tags'));




    }



    public function store(Request $request){

        $data = $request->all();
        $path = $request->file('picture')->store('images');






//semplice controllo che l'id esista e non sia modificato
$author_id = $data['author_id'];

if(!Author::find($author_id)){

    return view('posts.error.error-page');
}


else{




    $newPost= new Post();
    $newPost->fill($data);
    $newPost->image=$path;
    $newPost->save();

    $newPost->tags()->attach($data['tags']);


    //email part
    Mail::to('verderosamirco@gmail.com')->send(New PostCreated( $newPost));



    return redirect()->route('posts.index');

}



    }


    public function destroy(Post $post){
        $post->author()->delete();
        $post->delete();

        return redirect()->route('posts.index');
    }
}
