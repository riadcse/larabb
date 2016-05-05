@extends('layouts.app')

@section('page-title', 'Home')

@section('content')
	<div class="container">
	@foreach ($categories as $category)
		<div class="panel panel-default">
			<div class="panel-heading">{{ $category->name }}</div>
			@foreach ($category->boards as $board)
				<div class="panel-body">
					<a href="{{ url('/board/' . $board->id) }}">{{ $board->name }}</a>
				</div>
			@endforeach
		</div>
	@endforeach
	</div>
@stop