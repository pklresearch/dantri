<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePetugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namapetugas');
            $table->date('tgllahir');
            $table->string('alamat');
            $table->string('jabatan');
            $table->string('no_telp');
            $table->string('username');
            $table->string('password');
            $table->integer('idlevel')->unsigned();
            $table->string('photo');
            $table->timestamps();
            $table->foreign('idlevel')->references('id')->on('levels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petugas');
    }
}
