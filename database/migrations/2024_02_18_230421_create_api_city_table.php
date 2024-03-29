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
        Schema::create('api_city', function (Blueprint $table) {
            $table->id();
            $table->string('city_id')->unique();
            $table->string('city_name');
            $table->string('type');
            $table->string('postal_code');
            $table->string('province_id');
            $table->string('province');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('api_city');
    }
};
