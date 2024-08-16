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
        Schema::create('resumes', function (Blueprint $table) {
            $table->id(); 
            $table->string('user_id');
            $table->text('foto_profile');
            $table->string('nama');
            $table->string('role');
            $table->string('email');
            $table->string('alamat');
            $table->text('pendidikan');
            $table->text('training');
            $table->text('skill');
            $table->text('pengalaman_kerja');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resumes');
    }
};
