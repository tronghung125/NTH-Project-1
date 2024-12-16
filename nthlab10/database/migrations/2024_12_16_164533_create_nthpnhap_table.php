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
        Schema::create('nthpnhap', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nthSoPN')->primary();
            $table->date('nthNgayNhap');
            $table->string('nthSoDH');

            $table->foreign('nthSoDH')->references('nthSoDH')->on('nthdondh');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nthpnhap');
    }
};
