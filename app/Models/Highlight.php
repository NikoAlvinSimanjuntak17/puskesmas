<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Highlight extends Model
{
    use HasFactory;

    protected $table = 'highlights';

    protected $fillable = [
        'title',    // e.g., "Awards", "Departments", "Patients Served"
        'value',    // e.g., "5", "10k"
        'icon',     // optional: for font-awesome or heroicon class
        'type',     // optional: 'statistic', 'service', 'award'
    ];
}
