<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fees extends Model
{
    protected $fillable =['amount', 'student_id'];
    protected $dates = ['date'];
}
