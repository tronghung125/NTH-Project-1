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
        Schema::create('NTH_CT_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nthHoaDonID')->references('id')->on('NTH_HOA_DON');
            $table->bigInteger('nthSanPhamID')->references('id')->on('NTH_SAN_PHAM');
            $table->integer('nthSoLuongMua');
            $table->float('nthDonGiaMua');
            $table->float('nthThanhTien');
            $table->tinyInteger('nthTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NTH_CT_HOA_DON');
    }
};
