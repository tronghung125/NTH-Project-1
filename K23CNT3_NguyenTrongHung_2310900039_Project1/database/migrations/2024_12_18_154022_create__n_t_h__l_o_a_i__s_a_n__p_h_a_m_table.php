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
        Schema::create('NTH_LOAI_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('nthMaLoai',255)->unique();
            $table->string('nthTenLoai',255);
            $table->tinyInteger('nthTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NTH_LOAI_SAN_PHAM');
    }
};
