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


      <button> <a href="/authors">AUTHORS LIST</a></button>

      </div>
    </div>
  </div>
</div>
</div>
</div>




  @endforeach
@endsection
