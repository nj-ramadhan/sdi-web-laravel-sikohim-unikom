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
        Schema::create('uang_kas', function (Blueprint $table) {
            $table->id();
            $table->string('mahasiswa_nim');       
            $table->date('tanggal_bayar');
            $table->bigInteger('nominal_bayar');
            $table->string('bukti_bayar');
            $table->boolean('status')->nullable();  
            $table->timestamps();

            $table->foreign('mahasiswa_nim')->references('id')->on('mahasiswas')->onDelete('cascade');      
        }); 
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uang_kas');
    }
};
