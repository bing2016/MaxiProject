<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function course(){
        return $this->belongsTo('App\Course', 'course_name', 'name');
    }

    public function department(){
        return $this->belongsTo('App\Department', 'department_name', 'name');
    }

}
