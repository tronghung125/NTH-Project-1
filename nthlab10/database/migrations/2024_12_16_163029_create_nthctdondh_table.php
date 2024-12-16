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
        Schema::create('nthctdondh', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('nthSoDH');
            $table->string('nthMaVTu');
            $table->integer('nthSlDat');
            
            $table->primary(['nthSoDH','nthMaVTu']);

            $table->foreign('nthSoDH')->references('nthSoDH')->on('nthdondh');
            $table->foreign('nthMaVTu')->references('nthMaVTu')->on('nthvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nthctdondh');
    }
};
