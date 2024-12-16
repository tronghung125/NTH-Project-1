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
        Schema::create('nthctpxuat', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();

            $table->string('nthSoPX');
            $table->string('nthMaVTu');
            $table->integer('nthSlXuat');
            $table->float('nthDgXuat');

            $table->primary(['nthSoPX','nthMaVTu']);

            $table->foreign('nthSoPX')->references('nthSoPX')->on('nthpxuat');
            $table->foreign('nthMaVTu')->references('nthMaVTu')->on('nthvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nthctpxuat');
    }
};
