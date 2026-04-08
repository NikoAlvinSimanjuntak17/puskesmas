<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['title','slug','department_id','type','location','description','deadline'];
    protected $casts = ['deadline'=>'date'];
    public function department(){ return $this->belongsTo(Department::class); }
}