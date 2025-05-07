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
        // Majors Table
        Schema::create('majors', function (Blueprint $table) {
            $table->id();
            $table->string('major_name', 25)->unique();
        });

        // Classes Table
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('class_name', 128)->unique();
        });

        // Students Table
        Schema::create('students', function (Blueprint $table) {
            $table->string('nisn', 10)->primary();
            $table->string('fullname');
            $table->date('dob');
            $table->unsignedBigInteger('major_id');
            $table->unsignedBigInteger('id_kelas')->nullable();

            $table->foreign('major_id')->references('id')->on('majors')->onDelete('cascade');
            $table->foreign('id_kelas')->references('id')->on('classes')->onDelete('set null');
        });

        // Teachers Table
        Schema::create('teachers', function (Blueprint $table) {
            $table->string('nik', 16)->primary();
            $table->string('fullname');
            $table->date('dob');
            $table->unsignedBigInteger('id_kelas')->nullable();

            $table->foreign('id_kelas')->references('id')->on('classes')->onDelete('set null');
        });

        // User Types Table
        Schema::create('user_type', function (Blueprint $table) {
            $table->id();
            $table->enum('name', ['Admin', 'Guru', 'Siswa']);
        });

        // Users Table
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nisn', 10)->nullable()->unique();
            $table->string('nik', 16)->nullable()->unique();
            $table->string('password');
            $table->string('email')->unique();
            $table->unsignedBigInteger('user_type')->nullable();
            $table->timestamps();

            $table->foreign('user_type')->references('id')->on('user_type')->onDelete('set null');
        });

        // Tabungan Table
        Schema::create('tabungan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->decimal('nominal_total', 10, 2);

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Log Transaction Table
        Schema::create('log_transaction', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->enum('jenis_transaksi', ['setoran', 'penarikan']);
            $table->date('tanggal');
            $table->decimal('nominal', 10, 2);
            $table->text('keterangan')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Tokens Table
        Schema::create('tokens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('token')->unique();
            $table->timestamp('create_at')->useCurrent();
            $table->timestamp('expires_at');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tokens');
        Schema::dropIfExists('log_transaction');
        Schema::dropIfExists('tabungan');
        Schema::dropIfExists('users');
        Schema::dropIfExists('user_type');
        Schema::dropIfExists('teachers');
        Schema::dropIfExists('students');
        Schema::dropIfExists('classes');
        Schema::dropIfExists('majors');
    }
};
