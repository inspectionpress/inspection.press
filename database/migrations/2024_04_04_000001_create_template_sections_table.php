<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('template_sections', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inspection_template_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('template_sections');
    }
};
