<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stars & Stripes</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet">
	
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<style>

	html {
		font-family: Arial-Rounded-Bold;
	}

	h1, .navbar {
		font-family: Gobold-Bold;
		font-size:20px;
	}

	h1 {
		font-size:28px;
	}

	p {
		font-family: Arial-Rounded-Bold;
		font-size: 19px;
	}


	.navbar {
		margin-bottom: 0px;
		background-color: #26335e;
		border:none;
		border-radius: 0px;
	}

	.navbar-header {
		min-height: 70px;
	}

	.navbar-footer {
		padding-top:12px;
		padding-left: 15px;
		font-family: Arial-Rounded-Bold;
	}

		.navbar-footer > a {
			color: #26335e;
			font-weight: bold;
		}

		.navbar-footer > p {
			color: #26335e;
		}

	.navbar-brand {
		max-width: 180px;
	}

	.navbar-default .navbar-nav > li > a {
		color:white;
	}

	footer > .navbar {
		background-color: white;
	}


	.navbar-rt-footer > img {
	  max-height: 60px;
	  position: relative;
	  top:10px;
	  right: 160px;
	}
	
	.navbar-right > span {
	  position: relative;
	  top:10px;
	  right:0px;
	  padding: 10px 15px;
	}

	.navbar-rt-footer {
		padding-bottom: 20px;

	}

	span > img {
		padding: 0 3px;
	}

	.container {
		margin-top:15px;
	}

	li.active > a {
		background-color:white;
	}

	.navbar-default .navbar-nav > a:hover {
			color:#b62133;
		}

	.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus
	{
		background-color:white;
		color:black;
	}

	.navbar-default .navbar-nav > li > a {
		padding-top:25px;
		min-height: 70px;
	}

	.navbar-default .navbar-nav > li > a:hover{
		color: #b62133;
	}

	.well {
		background-color: white;
		color: #26335e;
		border: 4px solid #26335e;
	}


	#homepage-box {
		margin: 70px 10px;
		margin-bottom:150px;
	}


   @media only screen and (max-width : 650px) {
		#homepage-box {
			margin: 70px 10px;
			margin-bottom:250px;
			margin-top: 15px;
		}
	}

	</style>

</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/">
					<img src="{{ asset('/images/logo.png') }}" alt="" class="img-responsive" />
				</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
						<li><a href="{{ url('/') }}">Home I</a></li>
						<li><a href="{{ url('/home_2') }}">Home II</a></li>
						<li><a href="{{ url('/about') }}">About</a></li>
						<li><a href="{{ url('/resources') }}">Local Resources</a></li>
						<li><a href="{{ url('/help') }}">Need Help?</a></li>
						<li><a href="{{ url('/register') }}"
								style="background-color: #b62133; min-height:70px;">Register</a></li>
				</ul>
			</div>
		</div>

	</nav>

	@yield('content')

	<footer style="position:fixed; bottom:0px; background-color:white; width:100%;">
		<div class="navbar" style="padding-left:15px;">
			<div class="navbar-header navbar-footer">
				<a href="#">Contact</a> / <a href="#">Terms & Conditions</a> / <a href="#">Privacy Policy</a>
				<p>Duis autem vel eum iriure dolor in hend rerit in vulputate velit esse</p> 
			</div>
			<div class="navbar-right navbar-rt-footer">
				<span>
					<img src="{{ asset('/images/footer_600px.png') }}" style="max-height:50px;" alt="" />
					<img src="{{ asset('/images/fb_icon.png') }}" style="max-height:35px;" alt="" />
					<img src="{{ asset('/images/tw_icon.png') }}" style="max-height:35px;" alt="" />
				</span>
			</div>
		</div>
	</footer>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<script>

		var url = window.location;
		// Will only work if string in href matches with location
		$('ul.nav a[href="'+ url +'"]').parent().addClass('active');

		// Will also work for relative and absolute hrefs
		$('ul.nav a').filter(function() {
		    return this.href == url;
		}).parent().addClass('active');

	</script>
</body>
</html>
