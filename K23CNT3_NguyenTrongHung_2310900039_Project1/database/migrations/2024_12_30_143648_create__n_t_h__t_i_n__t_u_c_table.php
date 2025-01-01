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
        Schema::create('NTH_TIN_TUC', function (Blueprint $table) {
            $table->id();
            $table->string('nthMaTT')->unique();
            $table->string('nthTieuDe');
            $table->text('nthMoTa');
            $table->longText('nthNoiDung'); 
            $table->dateTime('nthNgayDangTin'); 
            $table->dateTime('nthNgayCapNhap'); 
            $table->string('nthHinhAnh');
            $table->tinyInteger('nthTrangThai'); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NTH_TIN_TUC');
    }
};
