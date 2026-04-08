<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('department_id')->constrained()->cascadeOnDelete();
            $table->string('specialty')->nullable();
            $table->enum('gender',['male','female'])->nullable();
            $table->string('photo')->nullable();
            $table->string('available_days')->nullable();
            $table->text('bio')->nullable();
            $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('doctors'); }
};