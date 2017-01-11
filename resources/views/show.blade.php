@extends('layout');

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
		
		<h1>{{ $tasks->title }}
		<a href="/tasks/{{ $tasks->id }}/edit" style="font-size:0.6em;"><span class="glyphicon glyphicon-pencil text-success pull-right" style="margin-top:14px;"></span></a>
		</h1>
		<ul class="list-group">
		<li class="list-group-item">{{ $tasks->task_desc }}</li>
		</ul>
	<a href="/tasks" style='color:white' class="btn btn-success">Home</a>
</div>
</div>
@stop
