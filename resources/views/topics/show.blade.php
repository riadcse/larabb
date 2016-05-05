@extends('layouts.app')

@section('page-title', $topic->title)

@section('content')
	<div class="container">
		<h2>{{ $topic->title }}</h2>
		<p>{{ $topic->body }}</p>
	    <hr>
	@foreach ($topic->replies as $reply)
		<div class="well well-md">
			<div class="row">
				<div class="col-xs-2 col-md-1">
					<a href="{{ url('/user/' . $reply->user_id) }}" class="thumbnail">
						<img src="http://placehold.it/100x100" alt="...">
					</a>
				</div>
				<div class="col-xs-10 col-md-11">
					<p>
					{{ $reply->body }}
					</p>
				</div>
			</div>
		</div>
	@endforeach
		<hr>
		<form action="/reply/{{ $topic->id }}/create" method="post">
			<textarea class="form-control" rows="3" name="body">Reply to this topic...</textarea>
			<div class="form-group">
				<button class="btn btn-primary" type="submit">Reply</button>
			</div>
		</form>
@stop