<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    
    <title>Home</title>

<style>

body {
  background: #ccc;
}

.header {
    background-color: #33ccff;
    color: white;
    text-align: center;
    padding: 10px;
    font-size: 16px; 
    border-style: ridge;
    width: 100%;
    border-color: black;
}

    

.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    -webkit-justify-content:center;
    justify-content:center;
    -webkit-align-items: center;
    align-items: center;
    padding: 15px;

}

@media screen and (max-width: 799px) {
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
      height: 250px;
      width: 100%;
      margin: 0px;
}
}

@media screen and (min-width: 800px) {
.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
      height: 700px;
      width: 100%;
      margin: auto;
}
}

/*Phone and tablet CSS*/
@media screen and (max-width: 799px) {
.container{
    background: #E60000;
    width: 100%;
    height: 250px;

}
}

/*Deskstop CSS*/
@media screen and (min-width: 800px) {
.container {
    float: left;
    background: #E60000;
    width:60%;
    height: 800px;

}
}
/*Phone and Tablet CSS*/
@media screen and (max-width: 799px) {
.welcome {
    float: left;
    width: 100%;
    height: auto;
    background: #E60000;
    color: #FFFFFF;
    margin: 0px;
    padding: 10px;
}
}
/*Desktop CSS*/
@media screen and (min-width: 800px) {
.welcome {
    float: left;
    width: 40%;
    height: 800px;
    background: #E60000;
    color: #FFFFFF;
    margin: 0px;
    padding: 10px;
}
}
p {
  color: #fff;
  font-size: 20px;
  font-family: Verdana;
}
.aside1 {
  display: inline;
  background: gray;
  margin: 0px;
  width:20px;
}

.footer {
  clear:both;
}



@media all and (min-width: 400px) { 
  .aside1 { flex: 1 auto; }
}

 
@media all and (min-width: 350px) {
  .main    { flex: 3 0px; }
    .carousel { order: 1; } 
    .welcome  { order: 2; }
    .aside2 { order: 4; }
    .footer { order: 5;}
}

</style>
</head>

<body>
  <header class="header">
    <h1 style="text-shadow: 2px 2px #000000;">Glencliff High School</h1>
  </header>
  
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
       @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
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
