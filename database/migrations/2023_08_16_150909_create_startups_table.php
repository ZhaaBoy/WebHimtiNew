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
        Schema::create('startups', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pendaftar');
            $table->string('email')->unique();
            $table->string('nama_team');
            $table->string('anggota_1')->unique();
            $table->string('anggota_2')->unique();
            $table->string('nama_sekolah');
            $table->string('no_hp');
            $table->string('tema_lomba')->nullable();
            $table->string('pembayaran');
            $table->string('project');
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
        Schema::dropIfExists('startups');
    }
};
