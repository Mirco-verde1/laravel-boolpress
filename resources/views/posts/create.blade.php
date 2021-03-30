@extends('posts.base-template')


@section('content')
<form action="{{route('posts.store')}}" method="post">
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
      <label for="exampleFormControlSelect2">Tags for your article</label>
      <select multiple class="form-control" id="exampleFormControlSelect2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>


    <div class="form-group">
      <label for="article">WRITE HERE</label>
      <textarea class="form-control" name="article" id="article" rows="8"></textarea>
    </div>

    <button class="btn btn-primary" type="submit">CREATE</button>  </form>
@endsection
