<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username_to')->nullable();
            $table->string('password_to')->nullable();
            $table->string('username_tm')->nullable();
            $table->string('password_tm')->nullable();
            $table->string('nomor_wa')->unique();
            $table->string('asal_sekolah');
            $table->foreignId('rumpun_id');
            $table->string('bukti_tf')->nullable();
            $table->foreignId('status_id')->default('1');
            $table->string('verified_by')->nullable();
            $table->boolean('send_webinar')->default(false);
            $table->boolean('send_tryout')->default(false);
            $table->boolean('send_tm')->default(false);
            $table->string('image_id')->nullable();
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
        Schema::dropIfExists('pesertas');
    }
}
