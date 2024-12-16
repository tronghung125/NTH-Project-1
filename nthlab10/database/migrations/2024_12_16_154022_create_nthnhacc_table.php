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
        Schema::create('nthnhacc', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nthMaNCC')->primary();
            $table->string('nthTenNCC');
            $table->string('nthDiachi');
            $table->string('nthDienthoai');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nthnhacc');
    }
};
