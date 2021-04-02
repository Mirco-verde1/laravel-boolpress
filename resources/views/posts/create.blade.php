@extends('posts.base-template')


@section('content')

<form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
@csrf
@method('POST')


    <div class="form-group">
      <label for="author_id">AUTHORS</label>

      <select class="form-control" name="author_id" id="author_id">

          @foreach ($authors as $item)
          <option value="{{$item->id}}">{{$item->name}} {{$item->surname}}</option>
          @endforeach

        </select>
    </div>



    <div class="form-group">

      <label for="tags[]">Tags for your article</label>

      <select multiple class="form-control" name="tags[]" id="tags">

        @foreach ($tags as $tag)
        <option value="{{$tag->id}}">{{$tag->name}}</option>
        @endforeach

      </select>
    </div>


     <div class="form-group">

      <label for="picture">Upload Image</label>
      <input type="file" class="form-control" id="picture"  name="picture">

    </div>


    <div class="form-group">
      <label for="article">WRITE HERE</label>
      <textarea class="form-control" name="article" id="article" rows="8"></textarea>
    </div>


    <button class="btn btn-primary" type="submit">CREATE</button>  </form>

    <br><br>
    <a href="{{route('posts.index')}}"><button class="btn btn-primary">POSTS</button></a><br><br>

    <a href="/"> <button class="btn btn-primary">HOME</button></a>
@endsection
