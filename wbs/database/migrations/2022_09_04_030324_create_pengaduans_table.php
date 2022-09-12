<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengaduansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id();
            $table->string('user_nik')->nullable();
            $table->string('name');
            $table->integer('user_id');
            $table->string('alamat_pelapor');
            $table->string('email');
            $table->string('no_hp');
            $table->string('opd');
            $table->string('jabatan_pelapor');
            $table->string('nama_pelaku');
            $table->string('jabatan_pelaku');
            $table->text('kronologis');
            $table->string('status')->default('Belum diproses');
            $table->softDeletes();
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
        Schema::dropIfExists('pengaduans');
    }
}
