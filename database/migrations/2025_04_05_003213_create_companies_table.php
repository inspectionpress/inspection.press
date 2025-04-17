<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('square_access_token')->nullable();
            $table->string('square_location_id')->nullable();
            $table->string('square_app_id')->nullable();
            $table->string('buildfax_api_key')->nullable();
            $table->text('square_footage_tiers')->nullable();
            $table->text('age_surcharge_rules')->nullable();
            $table->decimal('base_mileage_rate', 8, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};