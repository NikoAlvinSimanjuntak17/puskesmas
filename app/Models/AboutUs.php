<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    // If your table name is not the default plural, specify it
    protected $table = 'about_us';

    // If you want, you can allow mass assignment for all columns
    protected $guarded = [];
    
}
