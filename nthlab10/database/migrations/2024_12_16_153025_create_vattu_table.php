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
        Schema::create('nthvattu', function (Blueprint $table) {
            //$table->id();
            $table->string('nthMaVTu')->primary();
            $table->string('nthTenVTu')->unique();
            $table->string('nthDvTinh');
            $table->float('nthPhanTram');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vattu');
    }
};
