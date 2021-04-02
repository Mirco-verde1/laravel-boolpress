@extends('posts.base-template')


@section('content')


<div class="container-fluid">
    <div class="row">



@foreach ($posts as $post)


  <div class="container">
      <div class="row">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">AUTHOR</h4>
        <h5>{{$post->author->name}} {{$post->author->surname}}</h5>
        <br><br>
        <h4>ARTICLE</h4>
         <p>{{$post->article}}</p>

         <h4>Tags articolo : </h4>
       @foreach ($post->tags as $key)
          <h4>{{$key->name}}</h4>
          <img src="{{ asset($post->pic) }}" />
       @endforeach
      <button> <a href="/authors">AUTHORS LIST</a></button>

      </div>
    </div>
  </div>
</div>
</div>
</div>




  @endforeach
@endsection
