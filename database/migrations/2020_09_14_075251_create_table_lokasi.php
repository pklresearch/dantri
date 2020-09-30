<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLokasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namars');
            $table->string('alamat');
            $table->string('lokasi');
            $table->string('test_rapid');
            $table->string('test_swab');
            $table->string('email');
            $table->string('no_telp');
            $table->string('no_rek');
            $table->bigInteger('harga_rapid');
            $table->bigInteger('harga_swab');
            $table->text('deskripsi');
            $table->integer('id_fasilitas')->unsigned();
            $table->integer('jumlah_negatif');
            $table->timestamps();

            $table->foreign('id_fasilitas')->references('id')->on('fasilitas');
                        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lokasis');
    }
}
