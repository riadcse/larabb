@extends('layouts.app')

@section('page-title', $topic->title)

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="pull-right">
					<a href="{{ url('/topic/' . $topic->id . '/reply') }}" class="btn btn-primary btn-sm"><i class="fa fa-reply"></i> Post Reply</a>
					<a href="{{ url('/topic/create') }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Create Topic</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9 col-sm-9 col-xs-9">
				<h4 class="text-truncated">{{ $topic->title }}</h4>
			</div>
		</div>
		<div class="clearfix top-border">&nbsp;</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">SomeUser
					<div class="pull-right">
						<div class="btn-group hidden-md hidden-lg">
							<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
								Actions
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu dropdown-menu-right" role="menu">
								<li><a href="{{ url('/topic/subscribe?topic=' . $topic->id) }}"><i class="fa fa-bell-o"></i> Subscribe</a></li>
								<li><a href="{{ url('/report/topic/' . $topic->id) }}"><i class="fa fa-flag"></i> Report</a></li>
								<li><a href="{{ url('/ignore/topic/' . $topic->id) }}"><i class="fa fa-minus-circle"></i> Ignore</a></li>
							</ul>
						</div>
						<a class="btn btn-default btn-xs hidden-sm hidden-xs" href="{{ url('/topic/subscribe?topic=' . $topic->id) }}"><i class="fa fa-bell-o"></i> Subscribe</a>
						<a class="btn btn-default btn-xs hidden-sm hidden-xs" href="{{ url('/report/topic/' . $topic->id) }}"><i class="fa fa-flag"></i> Report</a>
						<a class="btn btn-default btn-xs hidden-sm hidden-xs" href="{{ url('/ignore/topic/' . $topic->id) }}"><i class="fa fa-minus-circle"></i> Ignore</a>
					</div>
				</div>
			</div>
			<div class="panel-body thread-row">
				<div class="row thread-row">
					<div class="col-xs-12 visible-xs-block">
						<div class="col-xs-5">
							<div class="clearfix">&nbsp;</div>
							<img class="img-thumbnail avatar" src="" alt="Avatar" />
							<div class="clearfix">&nbsp;</div>
						</div>
						<div class="col-xs-7">
							<div class="clearfix">&nbsp;</div>
							<div>SomeUser</div>
							<div class="text-muted text-left"><small>Total Posts: 1</small></div>
							<div class="text-muted text-left"><small>Date Joined: 05-04-2016</small></div>
							<div class="clearfix">&nbsp;</div>
							<div class="clearfix">&nbsp;</div>
						</div>
					</div>
					<div class="col-xs-12 visible-xs-block">
						<div class="clearfix top-border">&nbsp;</div>
					</div>
					<div class="col-md-2 col-sm-3 hidden-xs text-center userblock">
						<div class="clearfix">&nbsp;</div>
						<img class="img-thumbnail avatar" src="" alt="Avatar" />
						<div class="push_bottom_5"></div>
						<div class="label label-default">Administrator</div>
						<div class="push_bottom_5">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="text-muted text-left"><small>Total Posts: 1</small></div>
						<div class="text-muted text-left"><small>Date Joined: 05-04-2016</small></div>
						<div class="clearfix">&nbsp;</div>
						<a href="{{ url('/profile/someuser') }}" class="btn btn-default btn-xs">Profile</a>
						<a href="{{ url('/message/someuser') }}" class="btn btn-default btn-xs">Message</a>
						<div class="clearfix">&nbsp;</div>
					</div>
					<div class="col-md-5 col-sm-6 col-xs-8">
						<div class="clearfix">&nbsp;</div>
						<div class="text-muted">
							<span class="hidden-md hidden-lg"><i class="fa fa-calendar"></i> </span>
							<small><span class="hidden-sm hidden-xs">Posted:</span> 07 May 2016 22:44</small>
						</div>
						<div class="col-md-10 col-sm-9 col-xs-12">
							<div class="clearfix">&nbsp;</div>
							<div class="content-body">
								<p>{!! nl2br(e($topic->body)) !!}</p>
							</div>
							<div class="clearfix">&nbsp;</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@foreach ($topic->replies as $reply)
		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="panel-title">{{ $topic->title }}
					<div class="pull-right">
						<div class="btn-group hidden-md hidden-lg">
							<button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
								Actions
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu dropdown-menu-right" role="menu">
								<li><a href="{{ url('report/topic/' . $topic->id) }}"><i class="fa fa-flag"></i> Report</a></li>
								<li><a href="{{ url('ignore/topic/' . $topic->id) }}"><i class="fa fa-minus-circle"></i> Ignore</a></li>
							</ul>
						</div>
						<a class="btn btn-default btn-xs hidden-sm hidden-xs" href="{{ url('/report/topic/' . $topic->id) }}"><i class="fa fa-flag"></i> Report</a>
						<a class="btn btn-default btn-xs hidden-sm hidden-xs" href="{{ url('/ignore/topic/' . $topic->id) }}"><i class="fa fa-minus-circle"></i> Ignore</a>
					</div>
				</div>
			</div>
			<div class="panel-body thread-row">
				<div class="row thread-row">
					<div class="col-xs-12 visible-xs-block">
						<div class="col-xs-5">
							<div class="clearfix">&nbsp;</div>
							<img class="img-thumbnail avatar" src="" alt="Avatar" />
							<div class="clearfix">&nbsp;</div>
						</div>
						<div class="col-xs-7">
							<div class="clearfix">&nbsp;</div>
							<div>SomeUser</div>
							<div class="text-muted text-left"><small>Total Posts: 1</small></div>
							<div class="text-muted text-left"><small>Date Joined: 05-04-2016</small></div>
							<div class="clearfix">&nbsp;</div>
							<div class="clearfix">&nbsp;</div>
						</div>
					</div>
					<div class="col-xs-12 visible-xs-block">
						<div class="clearfix top-border">&nbsp;</div>
					</div>
					<div class="col-md-2 col-sm-3 hidden-xs text-center userblock">
						<div class="clearfix">&nbsp;</div>
						<img class="img-thumbnail avatar" src="" alt="Avatar" />
						<div class="push_bottom_5"></div>
						<div class="label label-default">Administrator</div>
						<div class="push_bottom_5">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="text-muted text-left"><small>Total Posts: 1</small></div>
						<div class="text-muted text-left"><small>Date Joined: 05-04-2016</small></div>
						<div class="clearfix">&nbsp;</div>
						<a href="{{ url('/profile/someuser') }}" class="btn btn-default btn-xs">Profile</a>
						<a href="{{ url('/message/someuser') }}" class="btn btn-default btn-xs">Message</a>
						<div class="clearfix">&nbsp;</div>
					</div>
					<div class="col-md-5 col-sm-6 col-xs-8">
						<div class="clearfix">&nbsp;</div>
						<div class="text-muted">
							<span class="hidden-md hidden-lg"><i class="fa fa-calendar"></i> </span>
							<small><span class="hidden-sm hidden-xs">Posted:</span> 07 May 2016 22:44</small>
						</div>
						<div class="col-md-10 col-sm-9 col-xs-12">
							<div class="clearfix">&nbsp;</div>
							<div class="content-body">
								<p>{!! nl2br(e($topic->body)) !!}</p>
							</div>
							<div class="clearfix">&nbsp;</div>
						</div>
						<div class="row">
							<div class="clearfix">&nbsp;</div>
							<div class="col-md-12 hidden-xs">
								<div class="clearfix top-border">&nbsp;</div>
								<div class="text-muted signature">
									<p></p>
								</div>
							</div>
							<div class="clearfix">&nbsp;</div>
						</div>
					</div>
				</div>
				<div class="panel-footer clearfix">
					<div class="pull-right">
						<button type="button" class="btn btn-primary btn-xs" onclick="">Quote</button>
					</div>
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