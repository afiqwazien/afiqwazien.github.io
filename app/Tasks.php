<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    //

    protected $fillable = ['title', 'task_desc'];  //can only mass assigned these two
    public function desc()
    {
    	return $this->hasMany(Desc::class);
    }

    public function addTask(Tasks $tasks)
    {
    	return $this->save($tasks);
    }
}
