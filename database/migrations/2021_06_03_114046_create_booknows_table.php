<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooknowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booknows', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('m_id');
            $table->bigInteger('user_id');
            $table->string('m_name');
            $table->string('person_name');
            $table->bigInteger('theatre_id');
            $table->bigInteger('show_id');
            $table->string('seat_num');
            $table->integer('numoftkt');
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
        Schema::dropIfExists('booknows');
    }
}
