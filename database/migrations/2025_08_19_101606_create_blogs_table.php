<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();                  // Auto-increment ID
            $table->string('title');       // Blog title
            $table->string('slug')->unique(); // URL slug
            $table->text('excerpt')->nullable(); // Short description
            $table->longText('content');   // Blog content
            $table->string('image')->nullable(); // Optional image
            $table->timestamps();          // created_at and updated_at
        });
        
        DB::statement('ALTER TABLE blogs CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci');
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
    
};
