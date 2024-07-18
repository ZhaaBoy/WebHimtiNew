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
        Schema::create('mobile_legends', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pendaftar');
            $table->string('nama_team');
            $table->string('email')->unique();
            $table->string('nama_leader');
            $table->string('team_1')->unique();
            $table->string('team_2')->unique();
            $table->string('team_3')->unique();
            $table->string('team_4')->unique();
            $table->string('team_5')->unique();
            $table->string('cadangan_1')->unique();
            $table->string('cadangan_2')->unique();
            $table->string('nomor_telpon');
            $table->string('pembayaran');
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
        Schema::dropIfExists('mobile_legends');
    }
};
