<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $fillable = ['name','email','subject','message','department_id','status'];
    public function department(){ return $this->belongsTo(Department::class); }
}