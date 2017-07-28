<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdvogadoParticipanteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advogado_participante_processo', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('advogado_id')->unsigned()->nullable();
            $table->integer('processo_id')->unsigned()->nullable();
            $table->timestamps();

        });

        Schema::table('advogado_participante_processo', function($table) {

            $table->foreign('advogado_id')->references('id')->on('advogados');

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
