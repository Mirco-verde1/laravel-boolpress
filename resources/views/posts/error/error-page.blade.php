@extends('posts.base-template');

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

<div class="container error-container">
	<div class="row  d-flex align-items-center justify-content-center">
		<div class="col-md-12 text-center">
			<h1 class="big-text">Oops!</h1>
			<h2 class="small-text">AUTHORS NOT FOUND</h2>

		</div>
		<div class="col-md-6  text-center">
			<p>The authors you are looking for might have been removed had its name changed or is temporarily unavailable.</p>


			<form class="example" action="action_page.php">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Search.." name="search">
					<button class="search-btn" type="submit"><a href="{{route('posts.create')}}">CREATE NEW POST</a></i></button>
				</div>

			</form>
			 <h2 class="small-text">OR</h2>

			<a href="# " class="button button-dark-blue iq-mt-15 text-center"> <a href="/posts">GO TO HOME PAGE</a> </a>

		</div>

	</div>


@endsection
<a href="{{route('posts.create')}}"></a>
