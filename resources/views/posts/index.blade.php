@extends('posts.base-template')


@section('content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Author List</th>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col">Email</th>
        <th scope="col">Photo</th>
      </tr>
    </thead>
    <tbody>


        @foreach ($authors as $detail)

      <tr>

        <th scope="row">{{$detail->id}}</th>
        <td>{{$detail->name}}</td>
        <td>{{$detail->surname}}</td>
        <td>{{$detail->mail}}</td>
        <td><img src="{{$detail->detail->author_image}}" ></td>
      </tr>




      @endforeach


    </tbody>
  </table>
@endsection
