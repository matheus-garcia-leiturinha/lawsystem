<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePericiaProcessoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pericia_processo', function (Blueprint $table) {


            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('pericia_id')->unsigned()->nullable();
            $table->integer('processo_id')->unsigned()->nullable();
            $table->double('pericias_honorarios',15,2)->default(0)->nullable();
            $table->timestamps();



        });


        Schema::table('pericia_processo', function($table) {

            $table->foreign('pericia_id')->references('id')->on('pericias');

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
