@extends('layouts.app')

@section('content')

<div>
    <h1>Welcome to the teacher area of Glencliff Online</h1>
    <p>Here you can post announcements to the your academy or the whole school.  Please click one of the links 
    below to login or register your account.  After you have created an account you will be able to post your 
    announcements.</p>
    
    <h5>Thank you for using Glencliff Online!</h5>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Teacher Area
                </div>
                  <ul>
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="{{ url('/logout') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
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
    </div>
</div>
   
@endsection