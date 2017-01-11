<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desc extends Model
{
    //
    public function task()
    {
    	return $this->belongsTo(Tasks::class);
    }
}
