<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiPeminjamanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_peminjaman', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_film');
            $table->string('nama_peminjam');
            $table->string('no_ktp');
            $table->string('foto_ktp');
            $table->string('tanggal_pinjam');
            $table->string('tanggal_kembali');
            $table->string('harga_sewa');
            $table->string('status');
            $table->string('tanggal_input_data');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_peminjaman');
    }
}
