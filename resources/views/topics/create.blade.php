@extends('layouts.app')

@section('page-title', 'Create Topic')

@section('content')
<div class="container">
@if (count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>
@endif
	<form action="{{ url('/board/' . $board->id . '/create') }}" method="post">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="title" class="control-label">Title</label>
			<input type="text" name="title" id="topic-title" class="form-control" value="{{ old('title') }}" placeholder="Title...">
		</div>
		<div class="form-group">
			<label for="body" class="control-label">Body</label>
			<textarea name="body" rows="8" class="form-control" placeholder="Body...">{{ old('body') }}</textarea>
		</div>
		<button class="btn btn-primary btn-sm" type="submit"><i class="fa fa-pencil"></i> Create Topic</button>
	</form>
</div>
@stop