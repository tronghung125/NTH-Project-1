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
        Schema::create('NTH_KHACH_HANG', function (Blueprint $table) {
            $table->id();
            $table->string('nthMaKhachHang',255)->unique();
            $table->string('nthHoTenKhachHang');
            $table->string('nthEmail',255);
            $table->string('nthMatKhau',255);
            $table->string('nthDienThoai',255);
            $table->string('nthDiaChi',255);
            $table->date('nthNgayDangKy');
            $table->tinyInteger('nthTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NTH_KHACH_HANG');
    }
};
