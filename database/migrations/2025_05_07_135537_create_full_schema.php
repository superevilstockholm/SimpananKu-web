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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('created_at')->useCurrent();
            $table->enum('type', ['admin', 'teacher', 'student']);
        });

        Schema::create('major', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('class', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelas')->unique();
        });

        Schema::create('student', function (Blueprint $table) {
            $table->string('nisn', 10)->primary();
            $table->string('fullname');
            $table->date('dob');
            $table->foreignId('major_id')->constrained('major')->onUpdate('no action')->onDelete('no action');
            $table->foreignId('class_id')->constrained('class')->onUpdate('no action')->onDelete('no action');
            $table->foreignId('user_id')->unique()->nullable()->constrained('users')->onUpdate('no action')->onDelete('no action');
        });

        Schema::create('teacher', function (Blueprint $table) {
            $table->string('nik', 16)->primary();
            $table->string('fullname');
            $table->date('dob');
            $table->foreignId('major_id')->constrained('major')->onUpdate('no action')->onDelete('no action');
            $table->foreignId('class_id')->constrained('class')->onUpdate('no action')->onDelete('no action');
            $table->foreignId('user_id')->unique()->nullable()->constrained('users')->onUpdate('no action')->onDelete('no action');
        });

        Schema::create('token', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users')->onUpdate('no action')->onDelete('no action');
            $table->string('token')->unique();
        });

        Schema::create('tabungan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained('users')->onUpdate('no action')->onDelete('no action');
            $table->decimal('nominal', 10, 2);
        });

        Schema::create('riwayat_transaksi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('no action')->onDelete('no action');
            $table->enum('type', ['penarikan', 'setoran']);
            $table->decimal('nominal', 10, 2);
            $table->timestamp('created_at')->useCurrent();
            $table->text('keterangan')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('riwayat_transaksi');
        Schema::dropIfExists('tabungan');
        Schema::dropIfExists('token');
        Schema::dropIfExists('teacher');
        Schema::dropIfExists('student');
        Schema::dropIfExists('class');
        Schema::dropIfExists('major');
        Schema::dropIfExists('users');
    }
};
