<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::rename('color_vehicle_models', 'color_vehicle_model');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('color_vehicle_model', 'color_vehicle_models');
    }
};
