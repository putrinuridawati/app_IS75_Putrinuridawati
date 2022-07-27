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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_tran')->unique();
            $table->date('tanggal');
            $table->string('kode_pelanggan');
            $table->string('kode_kasir');
            $table->bigInteger('barangs_id');
            $table->string('brutto');
            $table->string('tarra');
            $table->string('netto');
            $table->string('harga');
            $table->string('total');
            $table->string('bayar');
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
        Schema::dropIfExists('transaksis');
    }
};
