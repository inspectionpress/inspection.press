<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('findings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('recommendation')->nullable();
            $table->timestamps();
            $table->string('image_path')->nullable();
        });
    }

    public function down(): void {
        Schema::dropIfExists('findings');
    }
};