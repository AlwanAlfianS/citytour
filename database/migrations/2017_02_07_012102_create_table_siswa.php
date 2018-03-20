<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('t_siswa', function(Blueprint $table) {
        $table->increments('id_siswa');
        $table->string('nis', 10);
        $table->string('nama', 100);
        $table->enum('jk', ['L','P']);
        $table->text('alamat');
        $table->string('notelp', 12);
        $table->enum('agama', ['Islam','Budha','Hindu','Kristen Katolik','Kristen Protestan','Khong Hu Chu']);
        $table->integer('id_kelas');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('t_siswa');
    }
}
