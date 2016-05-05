@extends('layouts.app')

@section('page-title', $board->name)

@section('content')
	<div class="container">
		<div class="btn-group pull-right" role="group" aria-label="...">
			<a href="{{ url('/topic/create?board=' . $board->id) }}" class="btn btn-success"><i class="fa fa-plus"></i> Create Topic</a>
		</div>
		<h3>{{ $board->name }}</h3>
		<p>{{ $board->description }}</p>
		<hr>
		<ul class="list-group">
		@foreach ($topics as $topic)
			<li class="list-group-item">
				<a href="{{ url('/topic/' . $topic->id) }}">{{ $topic->title }}</a>
			</li>
		@endforeach
		</ul>
		{!! $topics->links() !!}
	</div>
@stop