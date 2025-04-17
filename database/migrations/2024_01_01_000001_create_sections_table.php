<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->uuid('inspection_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('inspection_id')->references('id')->on('inspections')->onDelete('cascade');
        });
    }

    public function down(): void {
        Schema::dropIfExists('sections');
    }
};
