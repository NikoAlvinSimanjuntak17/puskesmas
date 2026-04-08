<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name','slug','description','contact_email','phone'];
    
    public function doctors(){ return $this->hasMany(Doctor::class); }
    public function services(){ return $this->hasMany(Service::class); }
}