<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['site_title','site_description','keywords','logo','address','phone','email'];

public function up(): void
{
    Schema::create('settings', function (Blueprint $table) {
        $table->id();
        $table->string('hero_title')->nullable();
        $table->string('hero_sub')->nullable();
        $table->string('hero_image')->nullable();
        $table->timestamps();
    });
}
}