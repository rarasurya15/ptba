<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('email');
            $table->string('asal_instansi');
            $table->string('jenjang');
            $table->string('jurusan');
            $table->string('nim');
            $table->string('no_hp');
            $table->string('surat_pengantar');
            $table->string('proposal');
            $table->string('curriculum_vitae');
            $table->string('foto');
            $table->enum('status', ['terkirim', 'diproses di Diklat PT Bukit Asam', 'diproses di satuan kerja yang dituju', 'diterima','ditolak'])->default('terkirim');
            $table->string('nomor_registrasi')->nullable()->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('daftars');
    }
};