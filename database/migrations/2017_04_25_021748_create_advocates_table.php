<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvocatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //


        Schema::create('advogados', function (Blueprint $table) {


            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('oab');
            $table->string('nome');
            $table->integer('telefone');
            $table->string('email');
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
        //

        Schema::dropIfExists('advogados');
    }
}
