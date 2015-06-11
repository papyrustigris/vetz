@extends('app')

@section('content')
<div class="container-fluid" style="background-image: url({{ asset('/images/hero_1.jpg') }}); background-repeat:no-repeat;">
	<div class="row">
		<div class="col-md-6">
			<div id="homepage-box" style="height: 100%;
									 	border: 8px solid white;
									 	color: white;">

				<h1 style="margin-top:15px; padding:10px 15px; font-size:36px;">Help Rockford Salute Its Veterans!</h1>
				<p style="padding:5px 10px;">
					Bergstrom Inc. and the Salvation Army of Winnebago County are proud to present  Stars & Stripes: A Salute to Our Veterans.
					Join us for an evening of thanks and appreciation<br><br>
					Saturday, October 10 <br>
					BMO Harris Bank Center <br>
					Rockford, IL  <br><br>
					<i>* Although tickets are required for entry, they will be provided to veterans and the community at no cost. </i>
				</p>
			</div>
		</div>
		<div class="col-md-6">
		<!--  -->
		</div>
	</div>
</div>
@endsection
