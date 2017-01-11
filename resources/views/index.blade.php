@extends('layout');

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<h1>All Tasks</h1>
	<ul class="list-group">
	@if (Session::has('message'))
	   <div class="alert alert-success">{{ Session::get('message') }}</div>
	@endif
	@if (Session::has('deleteMessage'))
	   <div class="alert alert-success">{{ Session::get('deleteMessage') }}</div>
	@endif
		@foreach ($tasks as $task)
		<li class="list-group-item">
			<span><a href="/tasks/{{ $task->id }}">{{ $task->title }}</span></a>
			<span class="pull-right">
				<a href="/tasks/{{ $task->id }}/edit"><span class="glyphicon glyphicon-pencil text-success" style="margin-top:4px;"></span></a>
				<a href="/tasks/{{ $task->id }}/delete" data-method="delete">
				<span class="glyphicon glyphicon-trash text-success" style="margin-top:4px;margin-left:10px"></span>
			</a>
			 
			</span>
			
		</li>
		@endforeach

	</ul>

	<button class="btn btn-success me">Hide It!</button>
	<div class="shred">
	<h3>Add a new task</h3>
		
	<form method="post" action="/tasks/add">	
	{{ csrf_field() }}
		<div class="form-group">
		<label for="">Title</label>
			<input name="title" class="form-control" value="{{ old('title') }}">
		</div>		
		<div class="form-group">
		<label for="">Title Desc</label>
			<textarea name="task_desc" class="form-control">{{ old('task_desc') }}</textarea>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-success" value="Add Task" name="submit">
		</div>
	</form>
	@if (count($errors))
	<ul>
		@foreach ($errors->all() as $error)

		<li>{{ $error }}</li>

		@endforeach
	</ul>
	@endif
	</div>
	</div>

</div>

@stop

@section('footer')
<script>
// window.Laravel = { csrfToken: '{{ csrf_token() }}' };
$(document).ready(function(){
 	$('.me').click(function(){
 		$('.shred').toggle();
 		if($(this).text() == 'Hide It!'){
           $(this).text('Add New');
       } else {
           $(this).text('Hide It!');
       }
 	});

 });
 </script>
@stop
