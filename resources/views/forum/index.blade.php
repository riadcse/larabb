@extends('layouts.app')

@section('page-title', 'Home')

@section('content')
	<div class="container">
	@foreach ($categories as $category)
		<!-- Category: {{ $category->name }} -->
		<div class="panel-group">
			<div class="panel panel-default">
				<div class="panel-heading"><i class="fa fa-folder-open-o fa-fw"></i> {{ $category->name }}</div>
				<div class="panel-body">
					<div class="hidden-xs"><em>{{ $category->description }}</em></div>
				</div>
				<table class="table table-hover">
					<thead>
						<tr>
							<th class="hidden-xs"></th>
							<th>Board Name</th>
							<th class="text-right">Topics</th>
							<th class="text-right">Replies</th>
							<th class="hidden-xs">Latest Post</th>
						</tr>
					</thead>
					<tbody>
					@foreach ($category->boards as $board)
						<tr>
							<td class="hidden-xs">
								<i class="fa fa-commenting-o fa-4x"></i>
							</td>
							<td class="col-md-6 col-sm-6">
								<strong><a href="{{ url('/board/' . $board->id) }}">{{ $board->name }}</a></strong>
								<div class="hidden-xs"><em>{{ $board->description }}</em></div>
							</td>
							<td class="col-md-1 col-sm-1 text-right"><span class="badge">xx</span></td>
							<td class="col-md-1 col-sm-1 text-right"><span class="badge">xx</span></td>
							<td class="col-md-4 col-sm-4 hidden-xs">
								<div>
									<a href="{{ url('topic/8#r8') }}">Some Topic Title</a><br />
									<i class="fa fa-clock-o"></i> 05-07-2016 22:44<br />
									<i class="fa fa-user"></i> <a href="{{ url('/profile/someuser') }}">SomeUser</a>
								</div>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
			</div>
		</div>
	@endforeach
	</div>
@stop