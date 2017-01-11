<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Tasks;

class TasksController extends Controller
{
    //show all task
    public function index()
    {
    	// $tasks = DB::table('tasks')->get();
    	$tasks = Tasks::all();   //eloquenttttt

    	//return $tasks;
    	return view('index',compact('tasks'));
    }

    //show individual task
    public function show(Tasks $tasks)  //!!!same with parameter names
    {
    	//return $task;
    	return view('show',compact('tasks'));
    }

    //add new task
    public function add(Request $request)
    {

    	$this->validate($request, [
    			'title' => 'required',
    			'task_desc' => 'required|min:5'
    		]);
		//1st option
    	//Tasks::create($request->all());
    	//2nd option
		$tasks = new Tasks;
		$tasks->title = $request->title;
    	$tasks->task_desc = $request->task_desc;
    	$tasks->save();

    	Session::flash('message', "New Task Added!");
    	
    	return back();
    }

    //edit
    public function edit(Tasks $tasks)
    {
    	//return $tasks;
    	return view('tasks.edit',compact('tasks'));
    }
    public function update(Request $request, Tasks $tasks)
    {
    	$tasks->update($request->all());
    	//return $request;
    	//return $tasks->id;
    	$id = $tasks->id;
    	//return $id;
    	return redirect('tasks/'."$id");
    	//return back();
    }

    // delete
    public function delete(Tasks $tasks)
    {
    	$tasks->destroy($tasks->id);
    	Session::flash('deleteMessage', "Task Deleted!");
    	return back();
    }
}
