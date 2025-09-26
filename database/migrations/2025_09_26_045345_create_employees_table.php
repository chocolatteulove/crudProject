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
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // Primary key otomatis
            $table->string('nama_lengkap', 100); // Nama pegawai
            $table->string('email', 100)->unique(); // Email unik
            $table->string('nomor_telepon', 15); // Nomor telepon
            $table->date('tanggal_lahir'); // Tanggal lahir
            $table->text('alamat'); // Alamat
            $table->date('tanggal_masuk'); // Tanggal masuk
            $table->enum('status', ['aktif', 'non-aktif'])->default('aktif'); // Status pegawai
            $table->timestamps(); // Kolom created_at dan updated_at otomatis
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
