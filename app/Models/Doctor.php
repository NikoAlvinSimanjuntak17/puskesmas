<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['name','slug','department_id','specialty','bio','gender','photo','available_days'];
    public function department(){ return $this->belongsTo(Department::class); }
    public function appointments(){ return $this->hasMany(Appointment::class); }
}