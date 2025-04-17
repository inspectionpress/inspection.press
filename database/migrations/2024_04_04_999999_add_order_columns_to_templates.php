<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::table('template_sections', function (Blueprint $table) {
            $table->unsignedInteger('order')->default(0)->after('description');
        });
        Schema::table('template_findings', function (Blueprint $table) {
            $table->unsignedInteger('order')->default(0)->after('recommendation');
        });
    }

    public function down(): void {
        Schema::table('template_sections', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        Schema::table('template_findings', function (Blueprint $table) {
            $table->dropColumn('order');
        });
    }
};
