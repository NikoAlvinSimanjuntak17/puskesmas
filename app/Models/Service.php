<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['department_id','name','slug','summary','details'];
    public function department(){ return $this->belongsTo(Department::class); }
}