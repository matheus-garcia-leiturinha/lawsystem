<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipanteProcessoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('participante_processo', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->text('participante');
            $table->integer('processo_id')->unsigned()->nullable();
            $table->timestamps();

        });

        Schema::table('participante_processo', function($table) {

            $table->foreign('processo_id')->references('id')->on('processos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
