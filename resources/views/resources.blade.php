@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="">
				<h2>Resources View</h2>
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