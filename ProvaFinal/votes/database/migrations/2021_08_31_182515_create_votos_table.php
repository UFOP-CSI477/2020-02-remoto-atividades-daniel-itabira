<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public $timestamps = false;

    public function up()
    {
        Schema::create('votos', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->foreign('id')->on('users');
            $table->integer('tema_id')->foreign('id')->on('temas');
            $table->tinyInteger('opcao');
            $table->dateTime('data')->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votos');
    }
}
