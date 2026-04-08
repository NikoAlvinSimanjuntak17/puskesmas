<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['department_id','doctor_id','patient_name','patient_email','patient_phone','scheduled_at','notes','status'];
    protected $casts = ['scheduled_at'=>'datetime'];
    public function department(){ return $this->belongsTo(Department::class); }
    public function doctor(){ return $this->belongsTo(Doctor::class); }
}