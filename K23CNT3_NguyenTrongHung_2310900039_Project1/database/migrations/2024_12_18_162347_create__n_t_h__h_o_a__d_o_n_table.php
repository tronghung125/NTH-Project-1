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
        Schema::create('NTH_HOA_DON', function (Blueprint $table) {
            $table->id();
            $table->string('nthMaHoaDon',255);
            $table->string('nthMaKhachHang',255)->references('id')->on('NTH_KHACH_HANG1');
            $table->date('nthNgayHoaDon');
            $table->string('nthHoTenKhachHang');
            $table->string('nthEmail',255);
            $table->string('nthMatKhau',255);
            $table->string('nthDienThoai',255);
            $table->float('nthTongTriGia');
            $table->tinyInteger('nthTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NTH_HOA_DON');
    }
};
