@extends('layouts.app')

<div class="headerhome">
  <h1>Glencliff High School</h1>
</div>
@section('content')
<div class=" carousel container2">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
    <ol class="carousel-indicators">
      <li class="li_caro" data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li class="li_caro" data-target="#myCarousel" data-slide-to="1"></li>
      <li class="li_caro" data-target="#myCarousel" data-slide-to="2"></li>
      <li class="li_caro" data-target="#myCarousel" data-slide-to="3"></li>
      <li class="li_caro" data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="media/pic1.jpg" alt="gym">
    </div>

    <div class="item">
      <img src="media/pic5.jpg" alt="class room">
    </div>

    <div class="item">
      <img src="media/pic2.jpg" alt="Mariachi">
    </div>

    <div class="item">
      <img src="media/pic3.jpg" alt="art">
    </div>
    
    <div class="item">
      <img src="media/pic4.jpg" alt="art">
    </div>
  </div>

  <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
  
  <div class="welcome">
    <h1>Welcome parents and students of the Glencliff community.</h1>
    <p>We are happy to announce that you are looking at the new Glencliff website. 
    This website was created so that parents and students may be more aware of what 
    is happening in Glencliff High School. In this website we have two new features 
    which are selfie of the day and sneak peak. Selfie of the day is when students 
    submit there selfie/pictures and we will select one. Once we selected a picture 
    we will have it up on the glencliff website. Sneak peek is when we have a picture 
    of student's shoes and they will be there so that other students can guess who owns 
    that pair of shoes.
    </p>
    </div>
    


@endsection
