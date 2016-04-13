<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="/sitestyle.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <title>Home</title>

<style>


</style>
</head>

<body>
 
  
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
      <li class="active"><a href="{{ url('/public_announcements') }}">Announcements</a></li>
      <li><a href="{{ url('/FABI') }}">FABI</a></li>
      <li><a href="EUP.html">EUP</a></li>
      <li><a href="medsci.html">MED SCI</a></li>
      <li><a href="frc.html">FRC</a></li>
      <li><a href="news.html">News</a></li>
      <li><a href="sports.html">Sports</a></li>
      <li><a href="selfieoftheday.html">Selfie of the Day</a></li>
      <li><a href="sneakpeek.html">Sneak Peek</a></li>
      <li><a href="{{ url('/teacher_area') }}"><span class="glyphicon glyphicon-user"></span>Teachers</a></li>
  </ul>
  
    </div>
    </div>
</nav>

    
    @yield('content')
    

<div class="footer">
  <h1 style="text-align: center;">© Glencliff High School. All rights reserved.</h1>
</div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
