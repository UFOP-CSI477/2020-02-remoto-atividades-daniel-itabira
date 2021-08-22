<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCredorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credors', function (Blueprint $table) {
            $table->id();
            $table->string('id_credor',10);
            $table->string('nome_credor', 100);
            $table->string('cpf_credor',114);
            $table->string('status_credor',10);
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
        Schema::dropIfExists('credors');
    }
}
