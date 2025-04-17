<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('template_findings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('template_section_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('recommendation')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('template_findings');
    }
};
