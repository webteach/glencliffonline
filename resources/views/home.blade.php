@extends('layouts.app')
@section('title')
{{$title}}
@endsection

@section('content')
@if ( !$posts->count() )
There is no post till now. Login and write a new post now!!!
@else
<div class="">
	@foreach( $posts as $post )
	<div class="list-group">
		<div class="list-group-item">
			<h3><a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a>
				@if(!Auth::guest() && ($post->author_id == Auth::user()->id || Auth::user()->is_admin()))
					@if($post->active == '1')
					<div style="float:right;">
					<a href="{{ url('edit/'.$post->slug) }}" style="border-radius: 25%; background-color: #d9d9d9; text-decoration:none; padding: 10px;">edit</a>
					@else
					<a href="{{ url('edit/'.$post->slug) }}" style="border-radius: 25%; background-color: #d9d9d9; text-decoration:none; padding: 10px;">edit</a>
					@endif
				@endif
					</div>
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

@endsection
