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

			<div class="well" style="margin-top:10px;">
				<h2>Announcement Area</h2>
				<p>
					Special performances and guests include:<br>
					General INSERT NAME HERE <br>
					Rockford Symphony Orchestra <br>
					Mendelssohn Chorale 
				</p>				

				<i>June 6th 2015</i>
				</p>
			</div>

		</div>

		<div class="col-md-6">

			<div class="">
				<h2>About</h2>
				<p style="margin:20px 40px;">
					From the Great War to today, the men and women of Rockford have stood together and joined the ranks of many before them in service to this great country. Their unwavering commitment and sacrifice does not go unnoticed. It’s our turn to salute. 
					<br><br>Bergstrom Inc. and the Salvation Army of Winnebago County have planned an evening of thanks and appreciation for Rockford-area veterans. There is no ticket price associated with this event. Although tickets will be required for entry into the arena, this is a free community event. 
				</p>

				<a href="{{ url('/register') }}" class="btn btn-info pull-right">Register</a>
				</p>
			</div>

			<div class="" style="margin-top:80px; margin-bottom:150px;">
				<h2>Social Media Headline</h2>
				<h1 style="margin-left: 40px; color:#26335e;">
				<i class="fa fa-facebook"></i>
				<i class="fa fa-google"></i>
				<i class="fa fa-twitter"></i>
				</h1>
			</div>
		</div>

	</div>
</div>
@endsection