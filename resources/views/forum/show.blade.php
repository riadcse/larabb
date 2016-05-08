@extends('layouts.app')

@section('page-title', $board->name)

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="{{ url('/board/' . $board->id . '/create') }}" class="btn btn-primary btn-sm pull-right">
					<i class="fa fa-pencil"></i> Create Topic
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9 col-sm-9 col-xs-9">
				<h4 class="text-truncated">{{ $board->name }}</h4>
			</div>
		</div>
		<div class="clearfix top-border">&nbsp;</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">{{ $board->description }}</div>
					<table class="table table-hover">
						<thead>
							<tr>
								<th class="hidden-xs"></th>
								<th>Topic Title</th>
								<th class="text-right">Replies</th>
								<th class="text-right">Views</th>
								<th class="hidden-xs">Latest Info</th>
							</tr>
						</thead>
						<tbody>
						@foreach ($topics as $topic)
							<tr>
								<td class="hidden-xs">
								</td>
								<td class="col-md-6">
									<div>
										<a href="{{ url('/topic/' . $topic->id) }}">{{ $topic->title }}</a>
									</div>
									<small class="text-muted">Author: <a href="{{ url('/profile/someuser') }}">SomeUser</a></small>
								</td>
								<td class="col-md-1 text-right"><span class="badge">xx</span></td>
								<td class="col-md-1 text-right"><span class="badge">xx</span></td>
								<td class="col-md-4 hidden-xs">
									<div>
										Posted: 05-07-2016 19:45<br />
										<small class="text-muted">Author: <a href="{{ url('/profile/someuser') }}">SomeUser</a></small>
									</div>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		{!! $topics->links() !!}
	</div>
@stop