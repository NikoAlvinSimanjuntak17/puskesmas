<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'testimonials';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'title',
        'short_description',
        'full_description',
        'image',
        'file',
        'status',
    ];

    /**
     * Accessor for image path.
     *
     * @return string
     */
    public function getImageUrlAttribute()
    {
        return $this->image ? asset($this->image) : asset('images/default.jpg');
    }

    /**
     * Accessor for downloadable file path.
     *
     * @return string|null
     */
    public function getFileUrlAttribute()
    {
        return $this->file ? asset($this->file) : null;
    }
}
