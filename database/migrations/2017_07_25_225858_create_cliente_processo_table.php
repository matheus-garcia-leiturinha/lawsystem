<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClienteProcessoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('cliente_processo', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('cliente_id')->unsigned()->nullable();
            $table->integer('processo_id')->unsigned()->nullable();
            $table->timestamps();

        });


        Schema::table('cliente_processo', function($table) {

            $table->foreign('cliente_id')->references('id')->on('clientes');

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
