@extends('app')

@section('content')
<div class="container-fluid" style="background-image: url({{ asset('/images/hero_2.jpg') }});">
	<div class="row">
		<div class="col-md-6" style="margin: 20px 40px;
									 margin-top: 100px;
									 margin-bottom:100px;
									 height:100%;
									 background-color: rgba(38, 51, 94, 0.8);
									 color: white;">
			<h1 style="margin-top:15px; padding:15px 5px;">Help Rockford Salute Its Veterans!</h1>
			<p style="padding:5px 5px;">
				Bergstrom Inc. and the Salvation Army of Winnebago County are proud to present  Stars & Stripes: A Salute to Our Veterans.
				Join us for an evening of thanks and appreciation<br><br>
				Saturday, October 10 <br>
				BMO Harris Bank Center <br>
				Rockford, IL  <br><br>
				* Although tickets are required for entry, they will be provided to veterans and the community at no cost. 
			</p>
		</div>
		<div class="col-md-6">
		<!--  -->
		</div>
	</div>
</div>
@endsection
