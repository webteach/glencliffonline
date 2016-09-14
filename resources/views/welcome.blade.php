@extends('layouts.app')

@section('content')
<div class="headerhome">
  <h1>Glencliff High School</h1>
</div>
<!--Comment out carousel
<div class="container">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators
    <ol class="carousel-indicators">
      <li class="li_caro" data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li class="li_caro" data-target="#myCarousel" data-slide-to="1"></li>
      <li class="li_caro" data-target="#myCarousel" data-slide-to="2"></li>
      <li class="li_caro" data-target="#myCarousel" data-slide-to="3"></li>
      <li class="li_caro" data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

  <!-- Wrapper for slides
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="media/websitepics/carousel/DSCN0078.jpg" alt="gym">
    </div>

    <div class="item">
      <img src="media/websitepics/carousel/DSCN0242.jpg" alt="class room">
    </div>

    <div class="item">
      <img src="media/websitepics/carousel/DSCN0079.jpg" alt="Mariachi">
    </div>

    <div class="item">
      <img src="media/websitepics/carousel/DSCN0181.jpg" alt="art">
    </div>
    
    <div class="item">
      <img src="media/websitepics/carousel/DSCN0239.jpg" alt="art">
    </div>

  <!-- Left and right controls
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
</div>
-->
<!-- Video commented out -->
<div class="welcome">
  <video class="videoplayer" width="100%" height="600" controls>
  <source src="media/senior_atheletes.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
</div>

 
  <div class="welcome">
   <h1>Welcome parents and students of the Glencliff community.</h1>
    <p>We are happy to announce that you are looking at the new Glencliff website. 
    This website was created so that parents and students may be more aware of what 
    is happening inside Glencliff High School. On this website we have two new features. 
    Selfie of the day and Sneak Peak. Selfie of the day gives students a chance to 
    submit their selfie/pictures so that we may select one to showcase.  Sneak peek is when we post a picture 
    of a student's shoes so that other students can guess who belongs to that pair of shoes.
    </p>
  </div>
    


@endsection
