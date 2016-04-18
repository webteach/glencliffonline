@extends('layouts.app')

@section('content')

<div class="headerhome">
    <h1>Family Resource Center</h1>
</div>

<div class="flex-container">
 <video class="videoplayer" controls>
  <source src="media/frctrailer.mp4" type="video/mp4">
Your browser does not support the video tag.
</video>
</div>
<div class="flex-container" >
<h1 style="background: #666; border: 4px solid #000; border-radius: 15px; padding: 5px; color: #fff;">There is no <i>I</i> in <i>We</i>!</h1>
<p>The Family Resource Center (FRC) is a place where Glencliff students and families of Glencliff students may
come and receive help with whatever they're struggling with or cannot afford. The Family Resource Center
provides food, clothing, and connections to external sources for anyone in need, completely indiscriminately,
discreetly, and free of charge. The goal of the Glencliff FRC is to provide the Glencliff community with a
helping hand regardless of circumstance in the hopes that we may give every single person an equal opportunity 
for success.</p>
</div>
<div class="flex-container">
  <table style="background: #fff;">
     <caption>Contact FRC</caption>
    <tr>
      <th>Phone Numbers</th>
      <th>Emails</th>
    </tr>
    <tr>
     <td>Office: 615-333-5070 ext.301</td>
     <td>jill.watral@mnps.org</td>
    </tr>
    <tr>
     <td>Cell: 919-924-1971</td>
     <td>jwatral@pencilfd.org</td>
    </tr>
  </table>
</div>
@endsection

