@extends('app')

@section('content')
<div class="container" style="margin-bottom:100px;">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">


		<!-- step 1 -->

			<div class="panel panel-default">

				<div class="panel-heading text-center">
					<h1>Begin Registration</h1>
					Progress 1/5
				</div>
				
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="20"
				  aria-valuemin="0" aria-valuemax="100" style="width:20%">
				    <span class="sr-only">20% Complete</span>
				  </div>
				</div>
				
				
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

				<div id="step-1">
					<form class="form-horizontal" role="form" method="POST">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">			

						<div class="form-group">
							<div class="col-md-6">
								<input type="text" class="form-control" name="firstName" placeholder="First Name">
							</div>

							<div class="col-md-6">
								<input type="text" class="form-control" name="lastName" placeholder="Last Name">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6">
								<input type="text" class="form-control" name="address1" placeholder="Address Line 1">
							</div>
						
							<div class="col-md-6">
								<input type="text" class="form-control" name="address2" placeholder="Address Line 2">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6">
								<select class="form-control" id="state" name="state" placeholder="State">
									<option value="AK">Alaska</option>
									<option value="AL">Alabama</option>
									<option value="AR">Arkansas</option>
									<option value="AZ">Arizona</option>
									<option value="CA">California</option>
									<option value="CO">Colorado</option>
									<option value="CT">Connecticut</option>
									<option value="DC">District of Columbia</option>
									<option value="DE">Delaware</option>
									<option value="FL">Florida</option>
									<option value="GA">Georgia</option>
									<option value="HI">Hawaii</option>
									<option value="IA">Iowa</option>
									<option value="ID">Idaho</option>
									<option value="IL">Illinois</option>
									<option value="IN">Indiana</option>
									<option value="KS">Kansas</option>
									<option value="KY">Kentucky</option>
									<option value="LA">Louisiana</option>
									<option value="MA">Massachusetts</option>
									<option value="MD">Maryland</option>
									<option value="ME">Maine</option>
									<option value="MI">Michigan</option>
									<option value="MN">Minnesota</option>
									<option value="MO">Missouri</option>
									<option value="MS">Mississippi</option>
									<option value="MT">Montana</option>
									<option value="NC">North Carolina</option>
									<option value="ND">North Dakota</option>
									<option value="NE">Nebraska</option>
									<option value="NH">New Hampshire</option>
									<option value="NJ">New Jersey</option>
									<option value="NM">New Mexico</option>
									<option value="NV">Nevada</option>
									<option value="NY">New York</option>
									<option value="OH">Ohio</option>
									<option value="OK">Oklahoma</option>
									<option value="OR">Oregon</option>
									<option value="PA">Pennsylvania</option>
									<option value="PR">Puerto Rico</option>
									<option value="RI">Rhode Island</option>
									<option value="SC">South Carolina</option>
									<option value="SD">South Dakota</option>
									<option value="TN">Tennessee</option>
									<option value="TX">Texas</option>
									<option value="UT">Utah</option>
									<option value="VA">Virginia</option>
									<option value="VT">Vermont</option>
									<option value="WA">Washington</option>
									<option value="WI">Wisconsin</option>
									<option value="WV">West Virginia</option>
									<option value="WY">Wyoming</option>
								</select>
							</div>

							<div class="col-md-6">
								<input type="text" class="form-control" name="zipCode" placeholder="Zip Code">
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" placeholder="Email Address">
							</div>

							<div class="col-md-6">
								<a class="btn btn-warning" href="{{ url('/') }}">HELP I DONT HAVE AN EMAIL</a>
							</div>
						</div>

						<div class="form-group">

							<div class="col-md-3">
							  <label><input type="radio" name="male"> Male</label>
							</div>

							<div class="col-md-3">
							  <label><input type="radio" name="female"> Female</label>
							</div>
							
							<div class="col-md-6">
								<input type="text" class="form-control" name="age" placeholder="Age">
							</div>

						</div>


						<div class="checkbox">
							<label><input type="checkbox" name="handicap" checked />Check box if you are handicapped or need assistance?</label>
						</div>

						<br>

						<!-- <div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Submit
								</button>
							</div>
						</div> -->

					</form>
				</div>
			</div>
		</div>

	<!--  step 2  -->

		<div class="panel panel-default">

				<div class="panel-heading text-center">
					<h1>Are you military?</h1>
					Progress 2/5
				</div>
				
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="40"
				  aria-valuemin="0" aria-valuemax="100" style="width:40%">
				    <span class="sr-only">40% Complete</span>
				  </div>
				</div>
				
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

				<div id="step-2">

				<div class="col-md-8 col-md-offset-2">
					<div class="form-group">
						<div class="radio">
						  <label><input type="radio" name="military">Yes</label>
						</div>
						
							<br>

						<div class="radio">
						  <label><input type="radio" name="non-military">No</label>
						</div>
					</div>					
				</div>	



				</div>
			</div>
		</div>

<!--  step 3  -->

		<div class="panel panel-default">

				<div class="panel-heading text-center">
					<h1>Military Information</h1>
					Progress 3/5
				</div>
				
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="60"
				  aria-valuemin="0" aria-valuemax="100" style="width:60%">
				    <span class="sr-only">60% Complete</span>
				  </div>
				</div>
				
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

				<div id="step-3">

					<div class="form-group">
						<div class="row">
							<div class="col-md-3">
								<div class="radio">
								  <label><input type="radio" name="military"><img src="http://placehold.it/100x100" class="img-responsive" alt="mili-1"/></label>
								</div>
							</div>
							<div class="col-md-3">
								<div class="radio">
								  <label><input type="radio" name="military"><img src="http://placehold.it/100x100" class="img-responsive" alt="mili-1"/></label>
								</div>
							</div>
							<div class="col-md-3">
								<div class="radio">
								  <label><input type="radio" name="military"><img src="http://placehold.it/100x100" class="img-responsive" alt="mili-1"/></label>
								</div>
							</div>
							<div class="col-md-3">
								<div class="radio">
								  <label><input type="radio" name="military"><img src="http://placehold.it/100x100" class="img-responsive" alt="mili-1"/></label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-3">
								<div class="radio">
								  <label><input type="radio" name="military"><img src="http://placehold.it/100x100" class="img-responsive" alt="mili-1"/></label>
								</div>
							</div>
							<div class="col-md-9">
								<div class="radio">
								  <label><input type="radio" name="military" /><input class="form-control" type="text" name="military" placeholder="Other" /></label>
								</div>
							</div>	
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<input type="text" class="form-control" name="firstName" placeholder="Your military rank" />
							</div>
							<div class="col-md-3">
								<div class="radio">
							  		<label><input type="radio" name="active">Active</label>
							  	</div>
							</div>
							<div class="col-md-3">
								<div class="radio">
							  		<label><input type="radio" name="veteran">Veteran</label>
							  	</div>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<div class="col-md-4">
								<input type="text" class="form-control" name="firstName" placeholder="Number of Years Served" />
							</div>
							<div class="col-md-8"></div>
						</div>
					</div>


					</div>
				</div>
			</div>



			<!--  step 4  -->

		<div class="panel panel-default">

				<div class="panel-heading text-center">
					Progress 4/5
				</div>
				
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="80"
				  aria-valuemin="0" aria-valuemax="100" style="width:80%">
				    <span class="sr-only">80% Complete</span>
				  </div>
				</div>
				
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

				<div id="step-3">

					<div class="form-group">
						<div class="row">
							<div class="col-md-12">
								<label>Here is a nostalgia prompt explanation text area </label>
									<textarea type="" class="form-control" rows="5"></textarea>

							</div>
						</div>
					</div>


		


					</div>
				</div>
			</div>




		</div>
	</div>
</div>


@endsection
