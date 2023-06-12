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
        Schema::create('mal__alis__models', function (Blueprint $table) {
            $table->id();
            $table->string('techizatci');
            $table->string('barcod');
            $table->string('mal_adi');
            $table->string('tip');
            $table->string('miqdar');
            $table->string('alis_qiy');
            $table->string('alis_cem');
            $table->string('satis_qiy');
            $table->string('satis_cem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mal__alis__models');
    }
};
