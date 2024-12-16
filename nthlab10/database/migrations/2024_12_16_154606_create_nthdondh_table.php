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
        Schema::create('nthdondh', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nthSoDH')->primary();
            $table->date('nthNgayDH');
            $table->string('nthMaNCC');
            $table->foreign('nthMaNCC')->references('nthMaNCC')->on('nthnhacc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nthdondh');
    }
};
