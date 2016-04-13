@extends('layouts.app')

<header class="headerhome">
    <h1 style="text-shadow: 2px 2px #000000;">Announcements</h1>
</header>

@section('content')

<div class="container scroll" style="width: 50%;">
    <h1>this is where the announcements will display</h1>
    <div>
        <?php
        require('db_connect.php')
        
    </div>
</div> 

<div class="flex-container">
    <video width="700px"height="550px" controls>
      <source src="media/GHSvHendersonvillegame.mp4" type="video/mp4">
    </video>
</div>


   
    

<p style="font-size:20px; color: #000000;">
Welcome students and parents to the announcements page. This is the page where 
all the events will be announced.
</p>
</div>
     </aside>
 <br>
    <a href= target="_blank"></a>
</aside>

@endsection