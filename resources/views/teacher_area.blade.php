@extends('layouts.app')

@section('content')

<ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
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
                
<a href="{{ url('/tasks') }}">Create Announcement</a>
<div>
    <h1>Welcome to the teacher area of Glencliff Online</h1>
    <p>Here you can post announcements to the your academy or the whole school.  Please click one of the links 
    below to login or register your account.  After you have created an account you will be able to post your 
    announcements.</p>
    
    <h5>Thank you for using Glencliff Online!</h5>
</div>


                <div class="panel-body">
                    Teacher Area
                </div>
 <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}                   
   
@endsection