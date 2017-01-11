@extends('layout')

@section('content')
<div class="row">
	<div class="col-md-8 col-md-offset-2">
	<h1>Edit the task</h1>

	<form method="post" action="/tasks/{{ $tasks->id }}">	

	{{ method_field('PATCH')}}
	{{ csrf_field() }}
	<div class="form-group">
		<label for="">Title</label>
			<input name="title" class="form-control" value="{{ $tasks->title }}">
		</div>
		<div class="form-group">
			<label for="">Task Desc</label>
			<textarea name="task_desc" class="form-control">{{ $tasks->task_desc }}
			</textarea>
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-success" value="Update Task" name="submit">
		</div>
	</form>
	<a href="" onclick="history.back()" style='color:white' class='btn btn-success pull-right'>Back</a> 

</div>
</div>

@stop

<!-- @section('footer')
<script>
$(document).ready(function(){
	var referrer =  document.referrer;
	//alert(referrer);
	$(".backTo").attr("href", referrer);
});
</script>
@stop -->