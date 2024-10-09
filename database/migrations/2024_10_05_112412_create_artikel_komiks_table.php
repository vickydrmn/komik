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
        Schema::create('artikel_komiks', function (Blueprint $table) {
            $table->id();
            $table->integer('no');
            $table->string('nama');
            $table->string('genre');
            $table->string('autor');
            $table->string('tanggal_update');
            $table->string('tanggal_rilis');
            $table->string('deskripsi')->nullable();
            $table->string('foto')->default('noimage.png');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel_komiks');
    }
};
