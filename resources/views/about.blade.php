@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<video width="100%" height="100%">
			  <source src="movie.mp4" type="video/mp4">
			  <source src="movie.ogg" type="video/ogg">
			  Your browser does not support the video tag.
			</video>

			<div class="well" style="margin-top:20px;">
				<h2>Announcement Area</h2>
				<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet laoreet quam. Vivamus eget felis imperdiet, malesuada ligula quis, frin- gilla erat. Etiam iaculis ornare scelerisque.
				<br><br>
				<i>June 6th 2015</i>
				</p>
			</div>

		</div>

		<div class="col-md-6">

			<div class="">
				<h2>Title Text</h2>
				<p style="margin:20px 40px;">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet laoreet quam. Vivamus eget felis imperdiet, malesuada ligula quis, frin- gilla erat. Etiam iaculis ornare scelerisque. “Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet laoreet quam. Vivamus eget felis imperdiet, malesuada ligula quis, frin- gilla erat. Etiam iaculis ornare scelerisque.
				<br><br>

				<a href="{{ url('/register') }}" class="btn btn-info pull-right">Register</a>
				</p>
			</div>

			<div class="" style="margin-top:120px;">
				<h2>Social Media Headline</h2>
				<h1 class="pull-right" style="color:blue;">
				<i class="fa fa-facebook"></i>
				<i class="fa fa-google"></i>
				<i class="fa fa-twitter"></i>
				</h1>
			</div>
		</div>

	</div>
</div>
@endsection