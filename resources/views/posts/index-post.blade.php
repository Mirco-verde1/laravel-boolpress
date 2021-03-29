@extends('posts.base-template')


@section('content')


<div class="container-fluid">
    <div class="row">



@foreach ($posts as $post)


  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Article {{$post->id}}</h5>
         <p>{{$post->article}}</p>

      </div>
    </div>
  </div>

  @endforeach
@endsection
