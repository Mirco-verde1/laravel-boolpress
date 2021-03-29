@extends('posts.base-template')


@section('content')


<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-6 offset-md-3">

            @foreach ($comments as $item)


			<div class="timeline">

                <h3>Articolo numero {{$item->post->id}}</h3>

                <br>

                <h3>Commento</h3>
					<p>{{$item->comment}}</p>


     <br><br>

            </div>

            @endforeach

		</div>
	</div>
</div>



@endsection
