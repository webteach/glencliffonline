@extends('layouts.app')
@section('title')
{{$title}}
@endsection

@section('content')
<div class="container">
			@if (Session::has('message'))
			<div class="flash alert-info">
				<p class="panel-body">
					{{ Session::get('message') }}
				</p>
			</div>
			@endif
			@if ($errors->any())
			<div class='flash alert-danger'>
				<ul class="panel-body">
					@foreach ( $errors->all() as $error )
					<li>
						{{ $error }}
					</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>@yield('title')</h2>
							@yield('title-meta')
						</div>
						<div class="panel-body">
							@yield('content')
							@if ( !$posts->count() )
There are no announcements.  Please log in and post a new announcement.
@else
<div class="">
	@foreach( $posts as $post )
	<div class="list-group">
		<div class="list-group-item">
			<h3><a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a>
				@if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))
					@if($post->active == '1')
					<button class="btn" style="float: right;"><a href="{{ url('edit/'.$post->slug) }}">Edit Post</a></button>
					@else
					<button class="btn" style="float: right;"><a href="{{ url('edit/'.$post->slug)}}">Edit Draft</a></button>
					@endif
				@endif
			</h3>
			<p>{{ $post->created_at->format('M d,Y \a\t h:i a') }} By <a href="{{ url('/user/'.$post->author_id)}}">{{ $post->author->name }}</a></p>
			
		</div>
		<div class="list-group-item">
			<article>
				{!! str_limit($post->body, $limit = 1500, $end = '....... <a href='.url("/".$post->slug).'>Read More</a>') !!}
			</article>
		</div>
	</div>
	@endforeach
	{!! $posts->render() !!}
</div>
@endif
						</div>
					</div>
				</div>
			</div>
			

<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<p>Copyright &copy; 2015 | <a href="http://www.findalltogether.com">Find All Together</a></p>
				</div>
			</div>
</div>
@endsection