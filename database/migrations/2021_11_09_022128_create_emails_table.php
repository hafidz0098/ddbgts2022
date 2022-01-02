<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emails', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('username_to')->nullable();
            $table->string('password_to')->nullable();
            $table->string('username_tm')->nullable();
            $table->string('password_tm')->nullable();
            $table->string('subject');
            $table->string('pesan');
            $table->string('nama_acara');
            $table->string('tanggal');
            $table->string('jam');
            $table->string('lokasi');
            $table->string('meeting_id');
            $table->string('meeting_passcode');
            $table->string('link_zoom');
            $table->string('link_to')->nullable();
            $table->string('link_tm')->nullable();
            $table->string('sent_by')->nullable();
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
        Schema::dropIfExists('emails');
    }
}
