@extends('posts.base-template')


@section('content')


<div class="container-fluid">
    <div class="row">



@foreach ($posts as $post)


  <div class="container">
      <div class="row">
    <div class="card" style="width: 1200px">
      <div class="card-body">

        <h4 class="card-title">AUTHOR</h4>
        <h5>{{$post->author->name}} {{$post->author->surname}}</h5>
        <br><br>

        <h4 >ARTICLE</h4>
         <p>{{$post->article}}</p>


         <h4 >Tags articolo : </h4>

       @foreach ($post->tags as $key)
          <h4><b>{{$key->name}}</b></h4>
          <img src="{{ asset($post->image) }}" />
       @endforeach

      <button> <a href="/authors">AUTHORS LIST</a></button>


      <form action="{{ route('posts.destroy',[$post->id]) }}" method="post">

        {{-- </ delete button> --}}
        @csrf
        @method('DELETE')
              <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="fas fa-trash-alt">DELETE</i>


      </form>

      </div>
    </div>
  </div>
</div>
</div>
</div>




  @endforeach
@endsection
