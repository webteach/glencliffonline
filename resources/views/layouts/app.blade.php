<!--
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="/sitestyle.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <title>GHS Online</title>

<style>


</style>
</head>

<body>
 
<!--Navigation Bar
<nav class="navbar navbar-inverse " style="margin: 0px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/welcome') }}">Glencliff Online</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('/home') }}">Announcements</a></li>
      	<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span><img src="media/aofn.jpg" style="height: 20px; width: 20px;"/></span> Academies of GHS</a>
			      <ul class="dropdown-menu" role="menu">
				      <li><a href="{{ url('/fabi') }}">FABI</a></li>
				      <li><a href="{{ url('/eup') }}">EUP</a></li>
				      <li><a href="{{ url('/amsr') }}">AMSR</a></li>
				      <li><a href="{{ url('/freshmen') }}">Freshmen Academy</a></li>
	      		</ul>
      	</li>
      <li><a href="{{ url('/frc') }}">FRC</a></li>
      <li><a href="{{ url('/news') }}">News</a></li>
      <li><a href="{{ url('/sports') }}">Sports</a></li>
      <li><a href="{{ url('/selfieoftheday') }}">Selfie of the Day</a></li>
      <li><a href="{{ url('/sneakpeek') }}">Sneak Peek</a></li>
		  <ul class="nav navbar-nav navbar-right">
				@if (Auth::guest())
			  <li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>Teachers</a>
			      <ul class="dropdown-menu" role="menu">
			        <li><a href="{{ url('/auth/login') }}">Login</a></li>
				      <!--<li><a href="{{ url('/auth/register') }}">Register</a></li>
			      </ul>
			  </li>
						@else
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
					  <ul class="dropdown-menu" role="menu">
						@if (Auth::user()->can_post())
							<li><a href="{{ url('/new-post') }}">Add new post</a></li>
							<li><a href="{{ url('/user/'.Auth::id().'/posts') }}">My Posts</a></li>
						@endif
							<li><a href="{{ url('/user/'.Auth::id()) }}">My Profile</a></li>
							<li><a href="{{ url('/ballot') }}">Vote Here</a></li>
								<li><a href="{{ url('/logout') }}">Logout</a></li>
						</ul>
				 </li>
						@endif
		  </ul>
				</div>
			</div>
		</nav>

<!--Start Main Body
@yield('content')

		
		
		<!-- Scripts
		<script src="{{ asset('/js/jquery.min-2.1.3.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.min-3.3.1.js') }}"></script>
	</body>
</html>

-->