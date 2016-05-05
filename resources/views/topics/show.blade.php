@extends('layouts.app')

@section('page-title', $topic->title)

@section('content')
	<div class="container">
		<h2>{{ $topic->title }}</h2>
		<p>{{ $topic->body }}</p>
	    <hr>
	@if (empty($topic->replies))
	    <div class="container">
	    	No replies yet...
	    </div>
	@else
	   	@foreach ($topic->replies as $reply)
		<div class="well">
			{{ $reply->body }}
		</div>
	   	@endforeach
	@endif
		<hr>
		<form action="/reply/{{ $topic->id }}/create" method="post">
			<textarea class="form-control" rows="3" name="body">Reply to this topic...</textarea>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Reply</button>
			</div>
		</form>
@stop