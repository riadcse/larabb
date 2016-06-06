@extends('layouts.app')

@section('page-title', 'Member List')

@section('content')
	<div class="container">
		<table class="table table-striped table-hover table-bordered table-responsive">
			<thead>
				<tr>
					<th>Name</th>
					<th>Total Posts</th>
					<th>Email</th>
					<th class="hidden-xs">URL</th>
					<th class="hidden-xs">AOL</th>
					<th class="hidden-xs">ICQ</th>
					<th class="hidden-xs">Yahoo</th>
					<th class="hidden-xs">Join Date</th>
					<th>Last Visit</th>
			 	</tr>
			</thead>
			<tbody>
			@foreach ($users as $user)
				<tr>
					<td><span><strong><a href="{{ url('/profile/' . $user->id) }}">{{ $user->name }}</a></strong></span></td>
					<td>123</td>
					<td></td>
					<td class="hidden-xs"><a href="#" target="_blank" title=""><i class="fa fa-globe"></i></a></td>
					<td class="hidden-xs"></td>
					<td class="hidden-xs"></td>
					<td class="hidden-xs"></td>
					<td class="hidden-xs">{{ $user->created_at }}</td>
					<td>{{ $user->updated_at }}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
		<div class="clearfix">&nbsp;</div>
		{{ $users->links() }}
	</div>
@stop