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
        Schema::create('NTH_SAN_PHAM', function (Blueprint $table) {
            $table->id();
            $table->string('nthMaSanPham',255)->unique();
            $table->string('nthTenSanPham',255);
            $table->string('nthHinhAnh',255);
            $table->integer('nthSoLuong');
            $table->float('nthDonGia');
            $table->bigInteger('nthMaLoai')->references('id')->on('NTH_LOAI_SAN_PHAM');
            $table->tinyInteger('nthTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NTH_SAN_PHAM');
    }
};
