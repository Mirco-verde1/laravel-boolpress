@extends('posts.base-template')


@section('content')


<div class="container mt-5 mb-5">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h4>Latest Comments</h4>
            @foreach ($comments as $item)


			<ul class="timeline">
				<li>
					<a href="#" class="float-right">{{$item->id}}</a>
					<p>{{$item->comment}}</p>
             {{--       <h3>{{$item->info->id}}</h3> --}}
				</li>

			</ul>

            @endforeach

		</div>
	</div>
</div>



@endsection
