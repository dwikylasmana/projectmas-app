<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name')->unique();
            $table->string('nik')->unique();
            $table->string('scan_ktp');
            $table->string('scan_kk');
            $table->string('telp')->unique();
            $table->string('negara');
            $table->string('provinsi');
            $table->text('alamat');
            $table->string('npwp')->unique();
            $table->string('scan_npwp');
            $table->string('no_sppkp')->unique();
            $table->string('scan_sppkp');
            $table->timestamp('modified')->nullable();
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
        Schema::dropIfExists('pendaftarans');
    }
}
