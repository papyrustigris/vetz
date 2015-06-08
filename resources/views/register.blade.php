@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">

				<div class="panel-heading text-center">
					<h1>Begin Registration</h1>
					Progress 1/5
				</div>
				
				<div class="progress">
				  <div class="progress-bar" role="progressbar" aria-valuenow="20"
				  aria-valuemin="0" aria-valuemax="100" style="width:20%">
				    <span class="sr-only">70% Complete</span>
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

				<div id="step1">
					<form class="form-inline" role="form" method="POST">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">						
						<div class="form-group">
							<div class="col-md-6">
								<input type="text" class="form-control" name="firstName" placeholder="First Name">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-6">
								<input type="text" class="form-control" name="lastName" placeholder="Last Name">
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6">
								<input type="text" class="form-control" name="Address1" placeholder="Address Line 1">
							</div>
						</div>
						
						<div class="form-group">
							<div class="col-md-6">
								<input type="text" class="form-control" name="Address2" placeholder="Address Line 2">
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
						</div>
						
						<div class="form-group">
							<div class="col-md-6">
								<input type="text" class="form-control" name="zipCode" placeholder="Zip Code">
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" placeholder="Email">
							</div>
						</div>

						<a href="{{ url('/') }}">HELP I DONT HAVE A FUCKING EMAIL B/C IM AN OLD FUCK</a>

						<div class="radio">
						  <label><input type="radio" name="male">Male</label>
						</div>
						<div class="radio">
						  <label><input type="radio" name="female">Female</label>
						</div>

						<div class="form-group">
							<div class="col-md-6">
								<input type="text" class="form-control" name="age" placeholder="Age">
							</div>
						</div>

						<div class="checkbox">
							<label><input type="checkbox" name="handicap" checked />Check box if you are handicapped or need assistance?</label>
						</div>

						<br>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button id="step-to-2" type="submit" class="btn btn-primary">
									Forward
								</button>
							</div>
						</div>
					</form>
				</div>

				<div id="step2" style="display:none;">
					<code>step 2</code>
				</div>

			</div>
		</div>
	</div>
</div>

	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>

$("#step-to-2").click(function () {
  $("#step1, #step2").toggle();
});
	
</script>

@stop
