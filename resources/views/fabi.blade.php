@extends('layouts.app')

@section('content')

<div class="headerhome" style="background: #0000b4;">
    <h1>Ford Academy of Business and Innovation</h1>
</div>

<div class="container">
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
      <img src="media/websitepics/fabi/DSCN0459.jpg" alt="Students working in web design class">
    </div>

    <div class="item">
      <img src="media/websitepics/fabi/DSCN0461.jpg" alt="Karla working on a computer">
    </div>

    <div class="item">
      <img src="media/websitepics/fabi/P1190668.jpg" alt="Art by Joseph Hendrix">
    </div>

    <div class="item">
      <img src="media/websitepics/fabi/DSCN0229.jpg" alt="Students working in Entrepreneurship class">
    </div>
    
    <div class="item">
      <img src="media/websitepics/fabi/DSCN0279.jpg" alt="Students working in Entrepreneurship class">
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
</div>

<div class="flex-container container">
<p>The Ford Academy of Business and Innovation (FABI) exists to empower all students by encouraging them to 
pursue their passions creatively and to develop character through quality instruction in a cooperative and 
supportive community. This academy is supported by the Ford Corporation, including the Ford Motor Credit 
Company and the Ford Next Generation Learning initiative. Students in FABI are able to select one of three 
pathway classes to further improve their academic experience. The current pathway classes are Ford 
PAS/Entrepreneurship, Web Design, and Innovative Arts.</p>
</div>


@endsection