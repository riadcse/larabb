@extends('layouts.app')

@section('content')
<div class="container">
	<form action="/topic/create" method="post">
		{{ csrf_field() }}

		<div class="form-group">
			<label for="title" class="control-label">Title</label>
			<input type="text" name="title" id="topic-title" class="form-control" placeholder="Title...">
		</div>
		<div class="form-group">
			<label for="body" class="control-label">Body</label>
			<textarea name="body" class="form-control" placeholder="Body..."></textarea>
		</div>
		<button class="btn btn-primary" type="submit">Post</button>
	</form>
</div>
@stop