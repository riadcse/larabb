@extends('layouts.app')

@section('page-title', $board->name)

@section('content')
	<div class="container">
		<div class="btn-group pull-right" role="group" aria-label="...">
			<a href="/board/{{ $board->id }}/newtopic" class="btn btn-success"><i class="fa fa-plus"></i> Create</a>
		</div>
		<h3>{{ $board->name }}</h3>
		<p>{{ $board->description }}</p>
		<hr>
		<ul class="list-group">
		@foreach ($topics as $topic)
			<li class="list-group-item">
				<a href="/topic/{{ $topic->id }}">{{ $topic->title }}</a>
			</li>
		@endforeach
		</ul>
		{!! $topics->links() !!}
	</div>
@stop